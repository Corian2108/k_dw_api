<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'detail_id' => random_int(1, 10),
            'table_id' => random_int(1, 10),
            'state_id' => random_int(1, 4)
        ];
    }
}
