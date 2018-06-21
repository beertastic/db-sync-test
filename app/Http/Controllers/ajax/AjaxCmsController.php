<?php

namespace App\Http\Controllers\ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Broker;
use App\Models\Builder;

class AjaxCmsController extends Controller
{

    private $db_legacy;

    public function __construct()
    {
        $this->db_legacy    = DB::connection('pgsql_tunnel');
        $this->legacy_sql   = config('legacy_sql_map');
        $this->sy_vars      = config('superyachts_static');
    }

    public function syncLegacyData( $entity = null )
    {
        if ($entity == null) {
            return 'false';
        }

        if ($entity == 'data-group') {
            // Get countries & Timezones in the back ground of the area call
            $this->syncCountryLegacyData( $this->legacy_sql['data-country'] );
            $this->syncTimezoneLegacyData();
        }

        return $this->fetchLegacyData( $this->legacy_sql[$entity] );
    }

    private function fetchLegacyData($get_config = null) {
        if ($get_config == null) {
            return 'false';
        }

        $sql = 'SELECT * FROM ' . $get_config['default_table'] . ' ORDER BY id';

        $getData = $this->db_legacy->select( DB::raw( $sql ) );

        try {
            foreach($getData as $useData) {

                $checkId            = [ 'legacy_id' => $useData->id ];
                $newData            = [];

                // If we're importing acht models, we need to assign that model to a builder.
                if ( ( $get_config['model'] == 'Yachtmodel' ) && ( $useData->property_yacht_builder_id != null ) ) {
                    $newData['builder_id'] = $this->lookupNewID( 'Builder', $useData->property_yacht_builder_id );
                }

                if ( $get_config['model'] == 'Address' ) {
                    $newData = $this->prepDataAddress($useData);

                } else if ( $get_config['model'] == 'Group' ) {
                    $newData = $this->prepDataGroup($useData);

                }  else if ($get_config['model'] == 'Multimedia') {
                    $newData = $this->prepYachtImages($useData);
                }

                $useModel = 'App\\Models\\' . $get_config['model'];
                $getParentId = $useModel::updateOrCreate( $checkId, $newData );

                if ( $get_config['model'] == 'Address' ) {
                    $this->importAddressMapping($get_config['parent'], $getParentId->id, $useData);
                }


            }
            return 'true';
        } catch ( Exception $e ) {
            // TODO: log errors?
            return 'false';
        }

    }

    private function prepDataAddress($useData) {
        $newData= [];

//        $getTempID = $this->getLegacyGroupID($useData->id);

//        if (count($getTempID) > 1) {
//            dd( $getTempID );
//        }

        $newData['address_type']    = $useData->address_type_id;
        $newData['tel']             = $useData->telephone;
        $newData['fax']             = $useData->fax;
        $newData['email']           = $useData->email;
        $newData['dept_name']       = $useData->department_name;
        $newData['address_0']       = $useData->address_line_0;
        $newData['address_1']       = $useData->address_line_1;
        $newData['address_2']       = $useData->address_line_2;
        $newData['address_3']       = $useData->address_line_3;
        $newData['address_4']       = $useData->address_line_4;
        $newData['address_5']       = $useData->address_line_5;
        $newData['address_6']       = $useData->address_line_6;
        $newData['address_7']       = $useData->address_line_7;
        $newData['address_8']       = $useData->address_line_8;
        $newData['address_9']       = $useData->address_line_9;
        $newData['address_10']      = $useData->address_line_10;
        $newData['address_11']      = $useData->address_line_11;
        $newData['address_12']      = $useData->address_line_12;
        $newData['address_13']      = $useData->address_line_13;
        $newData['address_14']      = $useData->address_line_14;
        $newData['address_15']      = $useData->address_line_15;
        $newData['address_16']      = $useData->address_line_16;
        $newData['country_id']      = $useData->country_id;
//        $newData['group_id']        = $this->getLegacyGroupID($useData->id);

        return $newData;
    }

    private function prepDataGroup($useData) {
        $newData = [];
        $newData['broker_id'] = $useData->organisation_id ?? 0;
        $newData['legacy_id'] = $useData->id ?? 0;
        $newData['parent_id'] = $useData->organisation_group_id_parent ?? 0;
        $newData['timezone_id'] = $useData->timezone_id ?? 0;
        $newData['name'] = $useData->group;
        $newData['desc'] = $useData->description;
        $newData['long'] = $useData->longitude;
        $newData['lat'] = $useData->latitude;

        return $newData;
    }

    private function prepYachtImages($useData) {
        $newData = [];
        $newData['legacy_id']       = $useData->id ?? 0;
        $newData['title']           = ''; // not yet
        $newData['name']            = $useData->resource;
        $newData['name_md5']        = md5($useData->resource);
        $newData['file_ext']        = pathinfo($useData->resource, PATHINFO_EXTENSION);
        $newData['path']            = '';// Not used yet? maybe later for other multimedia types
        $newData['description']     = $useData->description ?? '';
        $newData['type']            = $useData->resource_type_id;
        $newData['size']            = ''; // data not in legacy, perhaps update at a later date?
        $newData['duration']        = ''; // used for video
        $newData['width']           = $useData->width;
        $newData['height']          = $useData->height;
        $newData['aspect_width']    = ''; // Calc later
        $newData['aspect_height']   = ''; // Calc later

        return $newData;
    }

    private function getLegacyGroupID($org_id) {
        $sql = 'SELECT * FROM mod_fusionfw.organisation_group where organisation_id = ' . $org_id;
        $getData = $this->db_legacy->select( DB::raw( $sql ) );
        return $getData;
    }

    private function importAddressMapping($address_parent, $address_parent_id, $parent_object) {
        if ($address_parent == 'Broker') {
            $broker = Broker::where('legacy_id', $parent_object->organisation_id)->first();
            if($broker != null) {
                $broker->address()->detach($address_parent_id);
                $broker->address()->attach($address_parent_id);
            } else {
//                echo '<br />FIND ONE:' . $parent_object->organisation_id;
            }

        } else if ($address_parent == 'Builder') {
            $builder = Builder::where('legacy_id', $parent_object->property_yacht_builder_id)->first();
            if($builder != null) {
                $builder->address()->detach($address_parent_id);
                $builder->address()->attach($address_parent_id);
            }

        }
    }

    private function syncCountryLegacyData( $get_config ) {
        $newData = [];
        $sql = 'SELECT * FROM ' . $get_config['default_table'] . ' ORDER BY id';
        $getData = $this->db_legacy->select( DB::raw( $sql ) );

        try {
            foreach($getData as $useData) {
                $checkId            = [ 'id' => $useData->id ];
                $newData['code']          = $useData->code;
                $newData['name']          = $useData->country;

                $useModel = 'App\\Models\\' . $get_config['model'];
                $useModel::updateOrCreate( $checkId, $newData );
            }
            return 'true';
        } catch ( Exception $e ) {
            return 'false';
        }
    }

    private function syncTimezoneLegacyData() {
        $newData = [];
        $sql = 'SELECT * FROM mod_fusionfw.timezone ORDER BY id';
        $getData = $this->db_legacy->select( DB::raw( $sql ) );

        try {
            foreach($getData as $useData) {
                $checkId                = [ 'id' => $useData->id ];
                $newData['timezone']    = $useData->timezone;
                $newData['offset']      = $useData->offset;

                \App\Models\Timezone::updateOrCreate( $checkId, $newData );
            }
            return 'true';
        } catch ( Exception $e ) {
            return 'false';
        }
    }

    private function lookupNewID($parent, $legacy_id) {
        $getModel = 'App\\Models\\' . $parent;
        $getID = $getModel::getNewIDFromLegacy($legacy_id);
        return $getID;
    }

}