<?php

namespace Database\Factories;
//Conectar con modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    //Conectar con modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //Foreign Key
            'di_users' => $this->faker->unique()->random_int(8, 10),
            //Fields
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(100),
            'fecha' => $this->faker->dateTimeBetween('+0 days', '+1 month'),
            'hora' => $this->faker->time('H:i:s', '21:30:00'),
            'precio' => $this->faker->random_int(),
            'aforo' => $this->faker->numberBetween(10, 30)
        ];
    }
}
