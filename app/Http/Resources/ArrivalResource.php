<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArrivalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     * @throws \Exception
     */
    public function toArray($request)
    {
        $dateTime = new \DateTime(data_get($this->resource, 'ArrivalTime'));
        return [
            'airport' => [
                'code' => $this->resource['Destination']
            ],
            'date' => $dateTime->format('Y-m-d'),
            'time' => $dateTime->format('h:i:s')
        ];
    }
}
