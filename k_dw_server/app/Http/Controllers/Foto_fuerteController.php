<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto_fuerte;
use App\Http\Resources\FotoFuerteResource;

class Foto_fuerteController extends Controller
{
    public function index()
    {
        $item = Foto_fuerte::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Foto_fuerte();
        $item->nombre = $request->nombre;
        //migrations

        if ($item->save()) {
            return new FotoFuerteResource($item);
        }
    }

    public function show($id)
    {
        $item = Foto_fuerte::findOrFail($id);
        return new FotoFuerteResource($item);
    }

    public function edit($id)
    {
        $item = Foto_fuerte::find($id);
        return new FotoFuerteResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Foto_fuerte::findOrFail($id);
        $item->nombre = $request->nombre;

        if ($item->save()) {
            return new FotoFuerteResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Foto_fuerte::findOrFail($id);
        if ($item->delete()) {
            return new FotoFuerteResource($item);
        }
    }
}
