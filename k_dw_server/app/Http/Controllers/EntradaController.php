<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;
use App\Http\Resources\EntradaResource;

class EntradaController extends Controller
{

    public function index()
    {
        $item = Entrada::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Entrada();
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new EntradaResource($item);
        }
    }

    public function show($id)
    {
        $item = Entrada::findOrFail($id);
        return new EntradaResource($item);
    }

    public function edit($id)
    {
        $item = Entrada::find($id);
        return new EntradaResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Entrada::findOrFail($id);
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new EntradaResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Entrada::findOrFail($id);
        if ($item->delete()) {
            return new EntradaResource($item);
        }
    }
}
