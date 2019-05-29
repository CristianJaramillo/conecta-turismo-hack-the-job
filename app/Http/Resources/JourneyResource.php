<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JourneyResource extends JsonResource
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
            "journey" => $request['journey'],
            "airlines" => AirlineResource::collection($request['airlines']),
            "departure" => new DepartureResource($request['departure']),
            "arrival" => new DepartureResource($request['arrival']),
            "duration" => new DurationResource($request['duration']),
            "segments" => SegmentResource::collection($request['segments']),
            "scale" => $request['scale']
        ];
    }
}
