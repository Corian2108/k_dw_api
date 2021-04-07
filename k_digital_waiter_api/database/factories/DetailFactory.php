<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    protected $model = Detail::class;

    public function definition()
    {
        return [
            'cantidad' => random_int(1, 5),
            'total' => 100 / random_int(5, 10),
            'dish_id' => random_int(1, 3)
        ];
    }
}
