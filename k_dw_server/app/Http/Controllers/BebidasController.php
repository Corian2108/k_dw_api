<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebida;
use App\Http\Resources\BebidaResource;

class BebidasController extends Controller
{
    public function index()
    {
        $item = Bebida::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Bebida();
        $item->nombre = $request->nombre;

        if ($item->save()) {
            return new BebidaResource($item);
        }
    }

    public function show($id)
    {
        $item = Bebida::findOrFail($id);
        return new BebidaResource($item);
    }

    public function edit($id)
    {
        $item = Bebida::find($id);
        return new BebidaResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Bebida::findOrFail($id);
        $item->nombre = $request->nombre;

        if ($item->save()) {
            return new BebidaResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Bebida::findOrFail($id);
        if ($item->delete()) {
            return new BebidaResource($item);
        }
    }
}
