<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postre;
use App\Http\Resources\PostreResource;

class PostreController extends Controller
{
    public function index()
    {
        $item = Postre::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Postre();
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new PostreResource($item);
        }
    }

    public function show($id)
    {
        $item = Postre::findOrFail($id);
        return new PostreResource($item);
    }

    public function edit($id)
    {
        $item = Postre::find($id);
        return new PostreResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Postre::findOrFail($id);
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new PostreResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Postre::findOrFail($id);
        if ($item->delete()) {
            return new PostreResource($item);
        }
    }
}
