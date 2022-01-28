<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            //Foreign Key
            'id_rol' => $this->faker->numberBetween(1, 2),
            'id_foto_perfils' => $this->faker->numberBetween(1, 10),
            //Fields
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'clave' => 'ClaveGenerica1', // password
            'descripcion' => $this->faker->text(150),
            'email_verified_at' => now(),
        ];
    }
}
