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
            //Fields
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'clave' => 'ClaveGenerica1', // password
            'calificacion' => $this->faker->numberBetween(1, 5),
            'email_verified_at' => now(),
        ];
    }
}
