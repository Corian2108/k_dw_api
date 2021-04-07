<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'detail_id' => $this->detail_id,
            'table_id' => $this->table_id,
            'state_id' => $this->state_id
        ];
    }
}
