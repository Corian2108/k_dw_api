<?php

namespace Database\Factories;

use App\Models\Foto_evento;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_eventoFactory extends Factory
{

    protected $model = Foto_evento::class;

    public function definition()
    {
        return [
            //foreign key
            'id_evento' => $this->faker->numberBetween(1, 3)
        ];
    }
}
