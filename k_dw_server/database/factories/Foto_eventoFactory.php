<?php

namespace Database\Factories;
//conectar al modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_eventoFactory extends Factory
{
    //conectar al modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //foreign key
            'id_evento' => $this->faker->random_int(1, 3)
        ];
    }
}
