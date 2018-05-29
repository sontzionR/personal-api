<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Skills extends JsonResource
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
            'type' => 'skill',
            'id' => $this->id,
            'attributes' =>[
                'name' => $this->name,
                'years-experience' => $this->years
            ]
        ];

    }
}
