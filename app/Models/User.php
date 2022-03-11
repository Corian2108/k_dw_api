<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JwtSubject;

class User extends Authenticatable implements JwtSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'descripcion',
        'id_rol',
        'id_foto_perfils',
    ];

    protected $hidden = [
        'password',
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

    public function getJWtIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
