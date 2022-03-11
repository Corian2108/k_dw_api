<?php

namespace Database\Factories;

use App\Models\Foto_lugar;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_lugarFactory extends Factory
{
    protected $model = Foto_lugar::class;

    public function definition()
    {
        return [
            //fields
            'ruta' => $this->faker->text(100)
            
        ];
    }
}
