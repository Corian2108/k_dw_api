<?php

namespace Database\Factories;

use App\Models\Foto_postre;
use Illuminate\Database\Eloquent\Factories\Factory;

class Foto_postreFactory extends Factory
{

    protected $model = Foto_postre::class;

    public function definition()
    {
        return [
            //foreign key
            'id_postre' => $this->faker->numberBetween(1, 3)
        ];
    }
}
