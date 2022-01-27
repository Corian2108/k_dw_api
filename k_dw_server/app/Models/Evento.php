<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Menu()
    {
        return $this->hasOne(Menu::class);
    }

    public function Lugar()
    {
        return $this->hasOne(Lugar::class);
    }

    public function FotoEvento()
    {
        return $this->hasOne(Foto_evento::class);
    }

    public function Reservacion()
    {
        return $this->belongsTo(Reservacion::class);
    }
}
