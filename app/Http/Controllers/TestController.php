<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $db_master = \DB::connection('pgsql_tunnel');
        $SqlString = "Select * From mod_fusionfw.organisation where id = 117";
        $test = $db_master->select(DB::raw($SqlString));
//        $test = $db_master->table('property_yacht')->select('id, name')->get();
        dd($test);
    }
}
