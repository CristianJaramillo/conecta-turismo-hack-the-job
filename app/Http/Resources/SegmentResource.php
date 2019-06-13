<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SegmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => null,
            'departure' => new DepartureResource($this->resource),
            'arrival' => new ArrivalResource($this->resource),
            'isNightly' => false,
            'duration' => new DurationResource($this->resource),
            'flightNumber' => $this->resource['FlightNumber'],
            'aircraft' => $this->resource['Equipment'],
            'airline' => new AirlineResource($this->resource),
            'operatingAirline' => null
        ];
    }

}
