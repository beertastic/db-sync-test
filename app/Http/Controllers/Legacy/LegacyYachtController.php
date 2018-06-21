<?php

namespace App\Http\Controllers\Legacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Yacht;

class LegacyYachtController extends Controller
{
    function importLegacyData() {
        $db_master = \DB::connection('pgsql_tunnel');

        $SqlString = "Select * FROM property_yacht";

        $yachts = $db_master->select(DB::raw($SqlString));

        foreach($yachts as $getYacht) {
            echo '<br />' . $getYacht->id . ' - ' . $getYacht->name;
            $newData            = [];

            $checkId            = [ 'legacy_id' => $getYacht->id ];
            $newData['name']    = $getYacht->name ?? 'xxxxxxxxx' . rand(1,999999);
//            $newData['sale']    = ( $getYacht->type == 'SALES' ) ?? 0;
//            $newData['charter'] = ( $getYacht->type == 'CHARTER' ) ?? 0;
//
            Yacht::updateOrCreate( $checkId, $newData );
        }
    }
}
