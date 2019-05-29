<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartureResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        require [
            'airport' => new AirportResource($request['airport']),
            'date' => $request['date'],
            'time' => $request['time']
        ];
    }
}
