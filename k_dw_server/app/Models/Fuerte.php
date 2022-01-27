<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuerte extends Model
{
    use HasFactory;

    public function FotoFuerte()
    {
        return $this->hasOne(Foto_fuerte::class);
    }

    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
