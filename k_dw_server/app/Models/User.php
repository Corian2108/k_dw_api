<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'clave',
        'descripcion',
        'id_rol',
        'id_foto_perfils',
    ];

    protected $hidden = [
        'clave',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Rol()
    {
        return $this->hasOne(Rol::class);
    }

    public function FotoPerfil()
    {
        return $this->hasOne(Foto_perfil::class);
    }

    public function Evento()
    {
        return $this->belongsTo(Evento::class);
    }

    public function Reservacion()
    {
        return $this->belongsTo(Reservacion::class);
    }
}
