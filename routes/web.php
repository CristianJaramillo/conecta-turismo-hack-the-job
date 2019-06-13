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

Route::get('/', function () {


    dd((new \App\Repositories\AirPricingGroupRepository())->count());

    $doc = new DomDocument;
    $doc->validateOnParse = true;
    $doc->Load(storage_path('app/response.xml'));
    return [
        FlightDetailRepository::count(),
        $doc->getElementsByTagName("AirSegment")->count(),
        $doc->getElementsByTagName("FareInfo")->count(),
        $doc->getElementsByTagName("Route")->count(),
        $doc->getElementsByTagName("AirPricingSolution")->count()
    ];
});
