<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto_postre;
use App\Http\Resources\FotoPostreResource;

class Foto_postreController extends Controller
{
    public function index()
    {
        $item = Foto_postre::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Foto_postre();
        $item->nombre = $request->nombre;
        //migrations

        if ($item->save()) {
            return new FotoPostreResource($item);
        }
    }

    public function show($id)
    {
        $item = Foto_postre::findOrFail($id);
        return new FotoPostreResource($item);
    }

    public function edit($id)
    {
        $item = Foto_postre::find($id);
        return new FotoPostreResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Foto_postre::findOrFail($id);
        $item->nombre = $request->nombre;

        if ($item->save()) {
            return new FotoPostreResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Foto_postre::findOrFail($id);
        if ($item->delete()) {
            return new FotoPostreResource($item);
        }
    }
}
