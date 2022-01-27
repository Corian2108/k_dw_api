<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto_evento;
use App\Http\Resources\FotoEventoResource;

class Foto_eventoController extends Controller
{
    public function index()
    {
        $item = Foto_evento::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Foto_evento();
        $item->nombre = $request->nombre;
        //rehacer migrations

        if ($item->save()) {
            return new FotoEventoResource($item);
        }
    }

    public function show($id)
    {
        $item = Foto_evento::findOrFail($id);
        return new FotoEventoResource($item);
    }

    public function edit($id)
    {
        $item = Foto_evento::find($id);
        return new FotoEventoResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Foto_evento::findOrFail($id);
        $item->nombre = $request->nombre;

        if ($item->save()) {
            return new FotoEventoResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Foto_evento::findOrFail($id);
        if ($item->delete()) {
            return new FotoEventoResource($item);
        }
    }
}
