<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DetailResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'dish_id' => $this->dish_id,
            'cantidad' => $this->cantidad,
            'total' => $this->total
        ];
    }
}
