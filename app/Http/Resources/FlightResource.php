<?php

namespace App\Http\Resources;

use App\AirPricingGroup;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $journeys = array();

        foreach ($this->resource as $item)
            $journeys[] = new JourneyResource($item);

        return [
            "journeys" => $journeys,
            "options" => null
        ];
    }
}
