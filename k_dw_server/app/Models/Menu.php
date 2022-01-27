<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function Evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function Entrada()
    {
        return $this->hasOne(Entrada::class);
    }

    public function Fuerte()
    {
        return $this->hasOne(Fuerte::class);
    }

    public function Postre()
    {
        return $this->hasOne(Postre::class);
    }

    public function Bebida()
    {
        return $this->hasOne(Bebida::class);
    }
}
