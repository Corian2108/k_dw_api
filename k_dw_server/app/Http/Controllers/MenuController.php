<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Resources\MenuResource;

class MenuController extends Controller
{
    public function index()
    {
        $item = Menu::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Menu();
        $item->id_evento = $request->id_evento;
        $item->id_entrada = $request->id_entrada;
        $item->id_fuerte = $request->id_fuerte;
        $item->id_postre = $request->id_postre;
        $item->id_bebida = $request->id_bebida;
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new MenuResource($item);
        }
    }

    public function show($id)
    {
        $item = Menu::findOrFail($id);
        return new MenuResource($item);
    }

    public function edit($id)
    {
        $item = Menu::find($id);
        return new MenuResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Menu::findOrFail($id);
        $item->id_evento = $request->id_evento;
        $item->id_entrada = $request->id_entrada;
        $item->id_fuerte = $request->id_fuerte;
        $item->id_postre = $request->id_postre;
        $item->id_bebida = $request->id_bebida;
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new MenuResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Menu::findOrFail($id);
        if ($item->delete()) {
            return new MenuResource($item);
        }
    }
}
