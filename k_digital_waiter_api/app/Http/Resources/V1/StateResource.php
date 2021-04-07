<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'state_id' => $this->state_id,
            'descripcion' => $this->descripcion
        ];
    }
}
