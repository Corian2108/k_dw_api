<?php

namespace Database\Factories;

use App\Models\Fuerte;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuerteFactory extends Factory
{

    protected $model = Fuerte::class;

    public function definition()
    {
        return [
            //fields
            'nombre' => $this->faker->text(50),
            'descripcion' => $this->faker->text(200)
        ];
    }
}
