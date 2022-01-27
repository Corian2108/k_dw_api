<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Rol;
use \App\Models\User;
use \App\Models\Foto_perfil;
use \App\Models\Evento;
use \App\Models\Reservacion;
use \App\Models\Foto_evento;
use \App\Models\Lugar;
use \App\Models\Foto_lugar;
use \App\Models\Bebida;
use \App\Models\Postre;
use \App\Models\Fuerte;
use \App\Models\Entrada;
use \App\Models\Foto_entrada;
use \App\Models\Foto_postre;
use \App\Models\Foto_fuerte;
use \App\Models\Menu;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        Rol::factory(2)->create();
        User::factory(10)->create();
        Foto_perfil::factory(10)->create();
        Evento::factory(3)->create();
        Reservacion::factory(3)->create();
        Foto_evento::factory(3)->create();
        Lugar::factory(3)->create();
        Foto_lugar::factory(3)->create();
        Bebida::factory(3)->create();
        Postre::factory(3)->create();
        Fuerte::factory(3)->create();
        Entrada::factory(3)->create();
        Foto_entrada::factory(3)->create();
        Foto_postre::factory(3)->create();
        Foto_fuerte::factory(3)->create();
        Menu::factory(3)->create();
       
    }
}
