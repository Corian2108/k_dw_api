<?php

namespace Database\Factories;
//conectar a modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_entradaFactory extends Factory
{
    //conectar a modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //foreign key
            'id_entrada' => $this->faker->random_int(1, 3)
        ];
    }
}
