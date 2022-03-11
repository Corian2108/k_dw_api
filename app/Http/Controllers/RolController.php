<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;
use App\Http\Resources\RolResource;

class RolController extends Controller
{
    public function index()
    {
        $item = Rol::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Rol();
        $item->nombre_rol = $request->nombre_rol;

        if ($item->save()) {
            return new RolResource($item);
        }
    }

    public function show($id)
    {
        $item = Rol::findOrFail($id);
        return new RolResource($item);
    }

    public function edit($id)
    {
        $item = Rol::find($id);
        return new RolResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Rol::findOrFail($id);
        $item->nombre_rol = $request->nombre_rol;

        if ($item->save()) {
            return new RolResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Rol::findOrFail($id);
        if ($item->delete()) {
            return new RolResource($item);
        }
    }
}
