<?php

namespace Database\Factories;
//conectar a modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_fuerteFactory extends Factory
{
    //conectar a modelo
    protected $model = Model::class;

    public function definition()
    {
        return [
            //foreign key
            'id_fuerte' => $this->faker->random_int(1, 3)
        ];
    }
}
