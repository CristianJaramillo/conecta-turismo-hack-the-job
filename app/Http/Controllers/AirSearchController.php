<?php

namespace App\Http\Controllers;

use App\Http\Resources\AirFlightResource;
use Illuminate\Http\Request;

/**
 * Class AirSearchController
 * @package App\Http\Controllers
 */
class AirSearchController extends Controller
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $request->validate([
            'origin' => 'required|min:3|max:3',
            'destination' => 'required|min:3|max:3',
            'departure_date' => 'required|date_format:Y-m-d'
        ]);

        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $departureDate = $request->input('departure_date');

        $airOfOrigin = collect(\FlightDetailRepository::findAll())
            ->whereStrict('Origin', $origin)
            ->filter(function ($item) use ($departureDate) {
                $itemDateTime = new \DateTime(data_get($item, 'DepartureTime'));
                return $itemDateTime->format('Y-m-d') == $departureDate;
            })
            ->whereStrict('Destination', $destination)
            ->values();

        return new AirFlightResource($airOfOrigin->all());
    }

}
