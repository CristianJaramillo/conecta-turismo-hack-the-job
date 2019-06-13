<?php

namespace App\Http\Resources;

use App\Repositories\FlightDetailRepository;
use Illuminate\Http\Resources\Json\JsonResource;

class AirFlightResource extends JsonResource
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
            "count" => count($this->resource),
            "flights" => new FlightResource($this->resource)
        ];
    }
}
