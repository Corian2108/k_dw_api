<?php

namespace Database\Factories;

use App\Models\Foto_perfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_perfilFactory extends Factory
{

    protected $model = Foto_perfil::class;

    public function definition()
    {
        return [
            'id_user' => $this->faker->unique()->numberBetween(1, 10)
        ];
    }
}
