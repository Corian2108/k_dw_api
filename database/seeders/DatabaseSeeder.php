<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Rol;
use \App\Models\User;
use \App\Models\Foto_perfil;
use \App\Models\Evento;
use \App\Models\Reservacion;
use \App\Models\Lugar;
use \App\Models\Foto_lugar;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        Rol::factory(2)->create();
        Foto_perfil::factory(10)->create();
        User::factory(10)->create();
        Foto_lugar::factory(3)->create();
        Lugar::factory(3)->create();
        Evento::factory(3)->create();
        Reservacion::factory(7)->create();
       
    }
}
