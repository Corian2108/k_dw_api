<?php

namespace Database\Factories;
//conectar al modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservacionFactory extends Factory
{
    //conectar al modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //Foreign Key
            'id_user' => $this->faker->random_int(1, 7),
            'id_eventos' => $this->faker->random_int(1, 3),
            //Fields
            'lugares' => $this->faker->random_int(2, 6),
        ];
    }
}
