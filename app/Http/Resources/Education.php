<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Education extends JsonResource
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
          'type' => "education",
          'id' => $this->id,
          'attributes' => [
              'name' => $this->name,
              'address' => $this->address,
              'city' => $this->city,
              'state'  => $this->state,
              'zip' => $this->zip,
              'start' => $this->start,
              'end' => $this->end
          ]
        ];
    }
}

