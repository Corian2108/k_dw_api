<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postre extends Model
{
    use HasFactory;

    public function FotoPostre()
    {
        return $this->hasOne(Foto_postre::class);
    }

    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
