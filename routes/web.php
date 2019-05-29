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

    // dd(storage_path('app/response2.xml'));

    $file = File::get(storage_path('app/response.xml'));
    $xml  = new SimpleXMLElement($file);
    // $xml->registerXPathNamespace("s", "http://schemas.xmlsoap.org/soap/envelope/");
    // $body = $xml->xpath('s:Body');
    dd($xml);

    return view('welcome');
});
