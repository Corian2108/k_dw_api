<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_fuerte extends Model
{
    use HasFactory;

    public function Fuerte()
    {
        return $this->belongsTo(Fuerte::class);
    }
}
