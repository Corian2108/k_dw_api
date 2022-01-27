<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $item = User::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new User();
        $item->id_rol = $request->id_rol;
        $item->nombre = $request->nombre;
        $item->email = $request->email;
        $item->clave = $request->clave;
        $item->calificacion = $request->calificacion;

        if ($item->save()) {
            return new UserResource($item);
        }
    }

    public function show($id)
    {
        $item = User::findOrFail($id);
        return new UserResource($item);
    }

    public function edit($id)
    {
        $item = User::find($id);
        return new UserResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);
        $item->id_rol = $request->id_rol;
        $item->nombre = $request->nombre;
        $item->email = $request->email;
        $item->clave = $request->clave;
        $item->calificacion = $request->calificacion;

        if ($item->save()) {
            return new UserResource($item);
        }
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        if ($item->delete()) {
            return new UserResource($item);
        }
    }
}
