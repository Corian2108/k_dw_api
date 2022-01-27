<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto_perfil;
use App\Http\Resources\FotoPerfilResource;

class Foto_perfilController extends Controller
{
    public function index()
    {
        $item = Foto_perfil::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Foto_perfil();
        $item->nombre = $request->nombre;
        //migrations

        if ($item->save()) {
            return new FotoPerfilResource($item);
        }
    }

    public function show($id)
    {
        $item = Foto_perfil::findOrFail($id);
        return new FotoPerfilResource($item);
    }

    public function edit($id)
    {
        $item = Foto_perfil::find($id);
        return new FotoPerfilResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Foto_perfil::findOrFail($id);
        $item->nombre = $request->nombre;

        if ($item->save()) {
            return new FotoPerfilResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Foto_perfil::findOrFail($id);
        if ($item->delete()) {
            return new FotoPerfilResource($item);
        }
    }
}
