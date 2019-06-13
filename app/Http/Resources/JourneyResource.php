<?php

namespace App\Http\Resources;

use App\Repositories\AirSegmentRepository;
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

        $airSegments = collect(\AirSegmentRepository::findAll())
            ->where('FlightDetailsRef.Key', $this->resource['Key'])
            ->values()
            ->all();

        $airLines = array();
        $segments = array();

        foreach ($airSegments as $airSegment)
        {
            $airLines[] = new AirlineResource($airSegment);
            $segments[] = new SegmentResource($airSegment);
        }

        return [
            "journey" => $this->resource['Key'],
            "airlines" => $airLines,
            "departure" => new DepartureResource($this->resource),
            "arrival" => new ArrivalResource($this->resource),
            "duration" => new DurationResource($this->resource),
            "segments" => $segments,
            "scale" => count($segments)
        ];
    }
}
