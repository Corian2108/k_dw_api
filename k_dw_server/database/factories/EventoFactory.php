<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{

    protected $model = Evento::class;

    public function definition()
    {
        return [
            //Foreign Key
            'id_user' => $this->faker->numberBetween(8, 10),
            'id_lugar' => $this->faker->numberBetween(1, 3),
            //Fields
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(100),
            'fecha' => $this->faker->dateTimeBetween('+0 days', '+1 month'),
            'hora' => $this->faker->time('H:i:s', '21:30:00'),
            'precio' => $this->faker->randomFloat(45, 80),
            'aforo' => $this->faker->numberBetween(10, 20)
        ];
    }
}
