<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservacionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_users' => $this->id_users,
            'id_eventos' => $this->id_eventos,
            'lugares' => $this->lugares,
        ];
    }
}
