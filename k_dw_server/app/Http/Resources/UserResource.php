<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_rol' => $this->id_rol,
            'id_foto_perfils' => $this->id_foto_perfils,
            'nombre' => $this->nombre,
            'email' => $this->email,
            'password' => $this->password,
            'descripcion' => $this->descripcion,
        ];
    }
}
