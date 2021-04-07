<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::paginate(10);
        return OrderResource::collection($order);
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->detail_id = $request->detail_id;
        $order->table_id = $request->table_id;
        $order->state_id = $request->state_id;

        if ($order->save()) {
            return new OrderResource($order);
        }
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return new OrderResource($order);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->detail_id = $request->detail_id;
        $order->table_id = $request->table_id;
        $order->state_id = $request->state_id;

        if ($order->save()) {
            return new OrderResource($order);
        }
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        if ($order->delete()) {
            return new OrderResource($order);
        }
    }
}
