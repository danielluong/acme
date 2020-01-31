<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Widget extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'display_name' => $this->name,
            'parts' => $this->parts,
        ];
    }
}
