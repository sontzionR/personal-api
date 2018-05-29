<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Employment extends JsonResource
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
          'type' => "employment",
          'id' => $this->id,
          'attributes' => [
            'name' => $this->name,
            'position' => $this->position,
            'start' => $this->start,
            'end'  => $this->end,
            ]
        ];
    }
}
