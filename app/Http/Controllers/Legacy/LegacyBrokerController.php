<?php

namespace App\Http\Controllers\Legacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Broker;

class LegacyBrokerController extends Controller
{
    function importLegacyData() {
        $db_master = \DB::connection('pgsql_tunnel');

        $SqlString = "Select * From mod_fusionfw.organisation";

        $brokers = $db_master->select(DB::raw($SqlString));

        foreach($brokers as $broker) {
            echo '<br />' . $broker->id . ' - ' . $broker->trading_name;
            $newData                        = [];

            $checkId                        = [ 'legacy_id' => $broker->id ];
            $newData['name_trading']        = $broker->trading_name ?? '';
            $newData['name_registered']     = $broker->registered_name ?? '';
//            $newData['sale']    = ( $getYacht->type == 'SALES' ) ?? 0;
//            $newData['charter'] = ( $getYacht->type == 'CHARTER' ) ?? 0;

            Broker::updateOrCreate( $checkId, $newData );
        }
    }
}
