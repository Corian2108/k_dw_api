<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;
use App\Http\Resources\LugarResource;

class LugarController extends Controller
{
    public function index()
    {
        $item = Lugar::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Lugar();
        $item->nombre = $request->nombre;
        $item->ubicacion = $request->ubicacion;

        if ($item->save()) {
            return new LugarResource($item);
        }
    }

    public function show($id)
    {
        $item = Lugar::findOrFail($id);
        return new LugarResource($item);
    }

    public function edit($id)
    {
        $item = Lugar::find($id);
        return new LugarResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Lugar::findOrFail($id);
        $item->nombre = $request->nombre;
        $item->ubicacion = $request->ubicacion;

        if ($item->save()) {
            return new LugarResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Lugar::findOrFail($id);
        if ($item->delete()) {
            return new LugarResource($item);
        }
    }
}
