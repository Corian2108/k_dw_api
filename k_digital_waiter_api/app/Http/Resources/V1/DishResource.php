<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DishResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'descripcion' => $this->descripcion,
            'precio' => $this->precio
        ];
    }
}
