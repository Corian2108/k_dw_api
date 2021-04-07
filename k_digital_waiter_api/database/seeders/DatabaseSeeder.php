<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\State::create(['state_id' => 1, 'descripcion' => 'Orden Nueva']);
        \App\Models\State::create(['state_id' => 2, 'descripcion' => 'Preparando Orden']);
        \App\Models\State::create(['state_id' => 3, 'descripcion' => 'Orden Lista']);
        \App\Models\State::create(['state_id' => 4, 'descripcion' => 'Finalizado']);
        \App\Models\Table::factory(10)->create();
        \App\Models\Dish::factory(3)->create();
        \App\Models\Detail::factory(10)->create();
        \App\Models\Order::factory(10)->create();
    }
}
