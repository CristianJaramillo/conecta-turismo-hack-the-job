<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirSegmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param $flightId
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $flightId)
    {
         return collect(\AirSegmentRepository::findAll())
             ->where('FlightDetailsRef.Key', $flightId)
             ->values()
             ->all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $flightId
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($flightId, $id)
    {
        return collect(\AirSegmentRepository::findAll())
            ->where('FlightDetailsRef.Key', $flightId)
            ->where('Key', $id)
            ->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
