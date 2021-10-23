<?php

namespace Database\Factories;

//Conectar al modelo
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class RolFactory extends Factory
{
    //Conectar al modelo: protected $model = Rol::class;
    protected $model = Model::class;

    public function definition()
    {
        return [
            'nombre_rol' => $this->faker->unique()->randomElement(array('cliente', 'chef')),
        ];
    }
}
