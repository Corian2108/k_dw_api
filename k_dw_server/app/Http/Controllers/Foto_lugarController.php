<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto_lugar;
use App\Http\Resources\FotoLugarResource;

class Foto_lugarController extends Controller
{
    public function index()
    {
        $item = Foto_lugar::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Foto_lugar();
        $item->ruta = $request->ruta;
        //migrations

        if ($item->save()) {
            return new FotoLugarResource($item);
        }
    }

    public function show($id)
    {
        $item = Foto_lugar::findOrFail($id);
        return new FotoLugarResource($item);
    }

    public function edit($id)
    {
        $item = Foto_lugar::find($id);
        return new FotoLugarResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Foto_lugar::findOrFail($id);
        $item->ruta = $request->ruta;

        if ($item->save()) {
            return new FotoLugarResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Foto_lugar::findOrFail($id);
        if ($item->delete()) {
            return new FotoLugarResource($item);
        }
    }
}
