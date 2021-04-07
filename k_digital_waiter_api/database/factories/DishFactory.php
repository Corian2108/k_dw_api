<?php

namespace Database\Factories;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    protected $model = Dish::class;

    public function definition()
    {
        return [
            'descripcion' => $this->faker->text(50),
            'precio' => 100 / random_int(10, 15)
        ];
    }
}
