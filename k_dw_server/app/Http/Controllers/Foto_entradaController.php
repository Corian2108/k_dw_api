<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto_entrada;
use App\Http\Resources\FotoEntradaResource;

class Foto_entradaController extends Controller
{
    public function index()
    {
        $item = Foto_entrada::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Foto_entrada();
        $item->nombre = $request->nombre;
        //rehacer las migrations durante el debug

        if ($item->save()) {
            return new FotoEntradaResource($item);
        }
    }

    public function show($id)
    {
        $item = Foto_entrada::findOrFail($id);
        return new FotoEntradaResource($item);
    }

    public function edit($id)
    {
        $item = Foto_entrada::find($id);
        return new FotoEntradaResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Foto_entrada::findOrFail($id);
        $item->nombre = $request->nombre;

        if ($item->save()) {
            return new FotoEntradaResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Foto_entrada::findOrFail($id);
        if ($item->delete()) {
            return new FotoEntradaResource($item);
        }
    }
}
