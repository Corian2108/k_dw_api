<?php

namespace Database\Factories;

use App\Models\Postre;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostreFactory extends Factory
{
    protected $model = Postre::class;

    public function definition()
    {
        return [
            //fields
            'nombre' => $this->faker->text(50),
            'descripcion' => $this->faker->text(80)
        ];
    }
}
