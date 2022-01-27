<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_evento extends Model
{
    use HasFactory;

    public function Evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
