<?php

namespace Database\Factories;

use App\Models\Bebida;
use Illuminate\Database\Eloquent\Factories\Factory;

class BebidaFactory extends Factory
{

    protected $model = Bebida::class;

    public function definition()
    {
        return [
            //fields
            'nombre' => $this->faker->text(40)
        ];
    }
}
