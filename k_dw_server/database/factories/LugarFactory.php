<?php

namespace Database\Factories;

use App\Models\Lugar;
use Illuminate\Database\Eloquent\Factories\Factory;

class LugarFactory extends Factory
{

    protected $model = Lugar::class;

    public function definition()
    {
        return [
            //foreign key
            'id_evento' => $this->faker->numberBetween(1, 3),
            //fields
            'nombre' => $this->faker->text(50),
            'ubicacion' => $this->faker->text(60)
        ];
    }
}
