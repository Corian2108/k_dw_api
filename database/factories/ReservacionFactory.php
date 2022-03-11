<?php

namespace Database\Factories;

use App\Models\Reservacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservacionFactory extends Factory
{

    protected $model = Reservacion::class;

    public function definition()
    {
        return [
            //Foreign Key
            'id_users' => $this->faker->numberBetween(1, 7),
            'id_eventos' => $this->faker->numberBetween(1, 3),
            //Fields
            'lugares' => $this->faker->numberBetween(1, 3),
        ];
    }
}
