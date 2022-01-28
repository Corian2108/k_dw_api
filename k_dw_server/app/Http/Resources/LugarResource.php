<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LugarResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_foto' => $this->id_foto,
            'nombre' => $this->nombre,
            'ubicacion' => $this->ubicacion,
            'zona' => $this->zona
        ];
    }
}
