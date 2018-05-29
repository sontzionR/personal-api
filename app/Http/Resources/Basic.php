<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Basic extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'type' => "basic",
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email
                ]
        ];
    }
}
