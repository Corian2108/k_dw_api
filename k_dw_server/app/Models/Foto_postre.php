<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_postre extends Model
{
    use HasFactory;

    public function Postre()
    {
        return $this->belongsTo(Postre::class);
    }
}
