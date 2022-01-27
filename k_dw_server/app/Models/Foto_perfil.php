<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_perfil extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
