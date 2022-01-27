<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_entrada extends Model
{
    use HasFactory;

    public function Entrada()
    {
        return $this->belongsTo(Entrada::class);
    }
}
