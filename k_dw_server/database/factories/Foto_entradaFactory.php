<?php

namespace Database\Factories;

use App\Models\Foto_entrada;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_entradaFactory extends Factory
{

    protected $model = Foto_entrada::class;

    public function definition()
    {
        return [
            //foreign key
            'id_entrada' => $this->faker->numberBetween(1, 3)
        ];
    }
}
