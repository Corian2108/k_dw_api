<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{

    protected $model = Menu::class;

    public function definition()
    {
        return [
            //foreign key
            'id_evento' => $this->faker->numberBetween(1, 3),
            'id_entrada' => $this->faker->numberBetween(1, 3),
            'id_fuerte' => $this->faker->numberBetween(1, 3),
            'id_postre' => $this->faker->numberBetween(1, 3),
            'id_bebida' => $this->faker->numberBetween(1, 3),
            //fields
            'nombre' => $this->faker->text(50),
            'descripcion' => $this->faker->text(300)
        ];
    }
}
