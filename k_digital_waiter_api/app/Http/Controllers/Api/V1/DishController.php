<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DishResource;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        $dish = Dish::paginate(10);
        return DishResource::collection($dish);
    }

    public function store(Request $request)
    {
        $dish = new Dish();
        $dish->descripcion = $request->descripcion;
        $dish->precio = $request->precio;

        if ($dish->save()) {
            return new DishResource($dish);
        }
    }

    public function show($id)
    {
        $dish = Dish::findOrFail($id);
        return new DishResource($dish);
    }

    public function update(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);
        $dish->descripcion = $request->descripcion;
        $dish->precio = $request->precio;

        if ($dish->save()) {
            return new DishResource($dish);
        }
    }

    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);

        if ($dish->delete()) {
            return new DishResource($dish);
        }
    }
}
