<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_rol' => $this->id_rol,
            'nombre' => $this->nombre,
            'email' => $this->email,
        ];
    }
}
