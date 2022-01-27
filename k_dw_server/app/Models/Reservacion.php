<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class);
    }

    public function Evento()
    {
        return $this->hasOne(Evento::class);
    }
}
