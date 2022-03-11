<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_lugar extends Model
{
    use HasFactory;

    public function Lugar()
    {
        return $this->belongsTo(Lugar::class);
    }
}
