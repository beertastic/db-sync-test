<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LegacyDataController extends Controller
{

    private $db_legacy;

    public function __construct()
    {
        $this->db_legacy = DB::connection('pgsql_tunnel');
        $this->legacy_sql = config('legacy_sql_map');
        $this->static_vars = config('superyachts_static');

        if (!$this->db_legacy) {
            dd('No DB... please refresh.. it\'ll work !!');
        }
    }

    function index() {
//        $this->testCall();
        return view('cms.data', $this->prepareDashboard() );
    }

    private function testCall() {
//       dd( Storage::files('/') );
//        dd( Storage::put('source/file2.txt', 'Hello World') );

//        echo $this->getSyImageUrl(150, 100, 95, 'c', $this->static_vars['photopath_main']);
//        dd(  );

        $SqlString = "select * from public.property_yacht_resource LIMIT 10 OFFSET 500";
//        $SqlString = "select * from system.property_yacht_builder_resource where resource LIKE '%yamakay%' Limit 10";

        $getData = $this->db_legacy->select(DB::raw($SqlString));
        dd($getData);

        foreach ($getData as $data) {
            echo '<br />' . $this->getSyImageUrl( $data->width, $data->height, '96', '', $this->static_vars['photopath_main'] ) . $data->resource;
        }
        dd();

    }


    private function prepareDashboard() {

        $data['yacht']['old']               = $this->countLegacyData( $this->legacy_sql['data-yacht']['default_table'] );
        $data['yacht']['image']['old']      = $this->countLegacyData( $this->legacy_sql['data-yacht-image']['default_table'] );
        $data['builder']['old']             = $this->countLegacyData( $this->legacy_sql['data-builder']['default_table'] );
        $data['builder']['address']['old']  = $this->countLegacyData( $this->legacy_sql['data-builder-address']['default_table'] );
        $data['broker']['old']              = $this->countLegacyData( $this->legacy_sql['data-broker']['default_table'] );
        $data['broker']['address']['old']   = $this->countLegacyData( $this->legacy_sql['data-broker-address']['default_table'] );
        $data['model']['old']               = $this->countLegacyData( $this->legacy_sql['data-model']['default_table'] );
        $data['group']['old']               = $this->countLegacyData( $this->legacy_sql['data-group']['default_table'] );
        $data['news']['old']                = $this->countLegacyData( $this->legacy_sql['data-group']['default_table'] );

        $data['yacht']['new']               = $this->countCurrentData( $this->legacy_sql['data-yacht']['model'] );
        $data['yacht']['image']['new']      = $this->countCurrentData( $this->legacy_sql['data-yacht-image']['model'] );
        $data['builder']['new']             = $this->countCurrentData( $this->legacy_sql['data-builder']['model'] );
        $data['builder']['address']['new']  = $this->countCurrentData( $this->legacy_sql['data-builder-address']['parent'], 'builder' );
        $data['broker']['new']              = $this->countCurrentData( $this->legacy_sql['data-broker']['model'] );
        $data['broker']['address']['new']   = $this->countCurrentData( $this->legacy_sql['data-broker-address']['parent'], 'broker' );
        $data['model']['new']               = $this->countCurrentData( $this->legacy_sql['data-model']['model'] );
        $data['group']['new']               = $this->countCurrentData( $this->legacy_sql['data-group']['model'] );
        $data['news']['new']                = $this->countCurrentData( $this->legacy_sql['data-group']['model'] );

        $data['yacht']['percent_complete']              = $this->calculatePercentageDifference($data['yacht']['old']    , $data['yacht']['new']);
        $data['yacht']['image']['percent_complete']     = $this->calculatePercentageDifference($data['yacht']['image']['old']    , $data['yacht']['image']['new']);
        $data['builder']['percent_complete']            = $this->calculatePercentageDifference($data['builder']['old']  , $data['builder']['new']);
        $data['builder']['address']['percent_complete'] = $this->calculatePercentageDifference($data['builder']['address']['old']  , $data['builder']['address']['new']);
        $data['broker']['percent_complete']             = $this->calculatePercentageDifference($data['broker']['old']   , $data['broker']['new']);
        $data['broker']['address']['percent_complete']  = $this->calculatePercentageDifference($data['broker']['address']['old']   , $data['broker']['address']['new']);
        $data['model']['percent_complete']              = $this->calculatePercentageDifference($data['model']['old']    , $data['model']['new']);
        $data['group']['percent_complete']              = $this->calculatePercentageDifference($data['group']['old']     , $data['group']['new']);
        $data['news']['percent_complete']               = $this->calculatePercentageDifference($data['news']['old']     , $data['news']['new']);

        return [ 'data' => $data ];
    }

    private function countLegacyData($dataset) {
        $SqlString = "Select count(*)FROM " . $dataset;
        $getData = $this->db_legacy->select(DB::raw($SqlString));
        return $getData[0]->count;
    }

    private function countCurrentData($dataset, $map = '') {
        $tally = 0;
        $modelName = 'App\\Models\\' . $dataset;
        if ($map != '') {
            $getList = $modelName::withCount('address')->get();
            foreach ($getList as $count) {
                $tally += $count->address_count;
            }
            return $tally;
        }
        return $modelName::count();
    }










    //////////////////////////////
    // Helpful functions, maybe move to a helper at some point?
    //////////////////////////////
    private function calculatePercentageDifference($old = 0, $new = 0) {
        if ($old == $new) {
            return 100;
        }

        $calc = $new * (100 / $old);
        return floor($calc);

    }





    /*
     *
     * TAKEN FROM JAVA APP, APPARENT IMAGE RETRIEVAL SYSTEM/PROCESS
     *
     *
     * 	public String getUrl( int width, int height, int quality, String options, String yachtName ) {
		return getUrl(width, height, quality, options, yachtName, false, null);
	}
	public String getUrl( int width, int height, int quality, String options, String name, Boolean crop, Integer cropId ) {
		String guid = AppConfig.syImagesServiceGuid;
		OrganisationResourceCrop cropRes = null;
		if( cropId != null )
			cropRes = OrganisationResourceCrop.find.where().eq("cropId", cropId).eq("resource", this).findUnique();
		if( crop && cropRes != null ) {
			//if a crop exists for that image, calculate the dimentions and crop coordinates
			CalculatedImateCrops calculatedCrop = CalculateImageCrops.calculateCrop(cropRes.cropX, cropRes.cropY, cropRes.cropW, cropRes.cropH, this.width, this.height, width, height);
			options += "c{"+calculatedCrop.crop_x+","+calculatedCrop.crop_y+","+calculatedCrop.crop_w+","+calculatedCrop.crop_h+"}";
			width = calculatedCrop.width;
			height = calculatedCrop.height;
		}
		String genKey = utils.Tools.md5Encode( guid+( width > 0 ? width : "" )+(height > 0 ? height : "")+quality+options ).substring(0, 4);
		return routes.SyImagesS3Service.syImageResource("superyachts", "settings/organisation/resource/"+Slugify.slugify( name )+"-"+id+".jpg", options, genKey, width, height, quality ).toString();
	}

     */

    public static function getImageUrl( $width, $height, $quality, $params = '', $path ) {
        $key = substr( md5( env('IMAGE_SERVICE_ACCOUNT_GUID', '').($width > 0 ? $width : '').($height > 0 ? $height : '').$quality.$params ), 0, 4 );
        return 'http://www.superyachts.com/syv2/newsimages/'.$width.'/'.$height.'/'.$quality.'/'.$params.'/'.$key.'/'.$path;
    }
    public static function getSyImageUrl( $width, $height, $quality, $params = '', $path ) {
        $key = substr( md5( env('IMAGE_SERVICE_ACCOUNT_GUID', '').($width > 0 ? $width : '').($height > 0 ? $height : '').$quality.$params ), 0, 4 );
        return 'http://www.superyachts.com/syv2/resource/'.$width.'-'.$height.'-'.$quality.'-'.$params.'-'.$key.'/superyachts/'.$path;
    }





}
