<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'YachtController@index');

Route::get('/test', 'TestController@index');









// admin area / CMS etc .. currently defaults to 'true' but we can add a login layer later
Route::middleware(['cms'])->group(function () {

    Route::get('/admin/', ['uses' => 'cms\IndexController@index']);
    Route::get('/admin/data', ['uses' => 'cms\LegacyDataController@index']);


    ///////////////////////////////////
    // Ajax calls related to CMS
    ///////////////////////////////////

    // 1. Sync top level entities. Just check of Id's and catch legacy_id and create a new internal ID
    Route::get('/ajax/cms/syncData/{entity}',    ['uses' => 'ajax\AjaxCmsController@syncLegacyData'] );

    // 2. Stuff

});

// Legacy datta ingestion routes

Route::get('/legacy/yacht', 'Legacy\LegacyYachtController@importLegacyData');
Route::get('/legacy/broker', 'Legacy\LegacyBrokerController@importLegacyData');

