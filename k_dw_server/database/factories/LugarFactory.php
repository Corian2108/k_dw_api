<?php

namespace Database\Factories;
//conectar al modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class LugarFactory extends Factory
{
    //conectar al modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //foreign key
            'id_evento' => $this->faker->unique()->random_int(1, 3),
            //fields
            'nombre' => $this->faker->text(15),
            'ubicacion' => $this->faker->text(60)
        ];
    }
}
