<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;

    public function FotoLugar()
    {
        return $this->hasOne(Foto_lugar::class);
    }

    public function Evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
