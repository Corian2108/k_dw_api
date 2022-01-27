<?php

namespace Database\Factories;

use App\Models\Foto_fuerte;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_fuerteFactory extends Factory
{

    protected $model = Foto_fuerte::class;

    public function definition()
    {
        return [
            //foreign key
            'id_fuerte' => $this->faker->numberBetween(1, 3)
        ];
    }
}
