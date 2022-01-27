<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    public function FotoEntrada()
    {
        return $this->hasOne(Foto_entrada::class);
    }

    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
