<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_users' => $this->id_users,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'fecha' => $this->fecha,
            'hora' => $this->hora,
            'precio' => $this->precio,
            'aforo' => $this->aforo
        ];
    }
}
