<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FotoLugarResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'ruta' => $this->ruta
        ];
    }
}
