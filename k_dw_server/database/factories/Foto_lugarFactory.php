<?php

namespace Database\Factories;

use App\Models\Foto_lugar;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_lugarFactory extends Factory
{
    protected $model = Foto_lugar::class;

    public function definition()
    {
        return [
            //foreign key
            'id_lugar' => $this->faker->numberBetween(1, 3)
        ];
    }
}
