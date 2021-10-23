<?php

namespace Database\Factories;
//conectar a modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_lugarFactory extends Factory
{
    //conectar a modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //foreign key
            'id_lugar' => $this->faker->unique()->random_int(1, 3)
        ];
    }
}
