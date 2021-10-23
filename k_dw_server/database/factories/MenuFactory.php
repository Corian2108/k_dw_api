<?php

namespace Database\Factories;
//Conectar a modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    //Conectar a modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //foreign key
            'id_evento' => $this->faker->random_int(1, 3),
            'id_entrada' => $this->faker->random_int(1, 3),
            'id_fuerte' => $this->faker->random_int(1, 3),
            'id_postre' => $this->faker->random_int(1, 3),
            'id_bebida' => $this->faker->random_int(1, 3),
            //fields
            'nombre' => $this->faker->words(5),
            'descripcion' => $this->faker->text(300)
        ];
    }
}
