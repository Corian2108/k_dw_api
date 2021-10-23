<?php

namespace Database\Factories;
//conectar al modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntradaFactory extends Factory
{
    //conectar al modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //fields
            'nombre' => $this->faker->words(3),
            'descripcion' => $this->faker->text(80)
        ];
    }
}
