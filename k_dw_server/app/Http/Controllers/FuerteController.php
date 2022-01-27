<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuerte;
use App\Http\Resources\FuerteResource;

class FuerteController extends Controller
{
    public function index()
    {
        $item = Fuerte::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Fuerte();
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new FuerteResource($item);
        }
    }

    public function show($id)
    {
        $item = Fuerte::findOrFail($id);
        return new FuerteResource($item);
    }

    public function edit($id)
    {
        $item = Fuerte::find($id);
        return new FuerteResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Fuerte::findOrFail($id);
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new FuerteResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Fuerte::findOrFail($id);
        if ($item->delete()) {
            return new FuerteResource($item);
        }
    }
}
