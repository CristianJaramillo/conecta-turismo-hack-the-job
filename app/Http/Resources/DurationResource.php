<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DurationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $minutes = $this->resource['FlightTime'];

        return [
            'hours' => intval($minutes / 60),
            'minutes' => $minutes % 60
        ];
    }
}
