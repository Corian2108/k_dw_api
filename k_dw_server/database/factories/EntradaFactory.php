<?php

namespace Database\Factories;

use App\Models\Entrada;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntradaFactory extends Factory
{

    protected $model = Entrada::class;

    public function definition()
    {
        return [
            //fields
            'nombre' => $this->faker->text(40),
            'descripcion' => $this->faker->text(80)
        ];
    }
}
