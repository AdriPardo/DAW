<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=> [
                'id' => $this->id,
                'nombre' => $this->city .' '. $this->name,
            ],
            'links' => [
                'self' => 'http://127.0.0.1:8000/api/equipos/' . $this->id,
            ],
        ];
    }
}
