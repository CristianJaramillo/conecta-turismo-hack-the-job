<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('air')->group(function () {

    /*
    |
    | api/air/flights
    |
    */
    Route::apiResource('flights', 'FlightDetailController');

    Route::prefix('flights/{flightId}')->group(function () {

        /*
        |
        | api/air/flights/{flightId}/segments
        |
        */
        Route::get('segments', 'AirSegmentController@index');

        /*
        |
        | api/air/flights/{flightId}/segments/{segmentId}
        |
        */
        Route::get('segments/{segmentId}', 'AirSegmentController@show');

        Route::prefix('segments/{segmentId}')->group(function () {

        /*
        |
        | api/air/flights/{flightId}/segments/{segmentId}/pricings
        |
        */
            Route::get('pricings', 'AirPricingSolutionController@index');

        });

    });

    /*
    |
    | api/air/pricing-solutions
    |
    */
    Route::apiResource('pricing-solutions', 'AirPricingSolutionController');

    /*
    |
    | api/air/flights
    |
    */
    Route::apiResource('search', 'AirSearchController');

});

/*
|
| response2.xml
|
*/
Route::apiResource('air-pricing-group', 'AirPricingGroupController');

Route::apiResource('air-itineraries', 'AirItineraryController');