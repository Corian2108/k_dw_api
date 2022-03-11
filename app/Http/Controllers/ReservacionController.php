<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;
use App\Http\Resources\ReservacionResource;

class ReservacionController extends Controller
{
    public function index()
    {
        $item = Reservacion::all();
        return $item;
    }

    public function store(Request $request)
    {
        $item = new Reservacion();
        $item->id_users = $request->id_users;
        $item->id_eventos = $request->id_eventos;
        $item->lugares = $request->lugares;

        if ($item->save()) {
            return new ReservacionResource($item);
        }
    }

    public function show($id)
    {
        $item = Reservacion::findOrFail($id);
        return new ReservacionResource($item);
    }

    public function edit($id)
    {
        $item = Reservacion::find($id);
        return new ReservacionResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = Reservacion::findOrFail($id);
        $item->id_users = $request->id_users;
        $item->id_eventos = $request->id_eventos;
        $item->lugares = $request->lugares;

        if ($item->save()) {
            return new ReservacionResource($item);
        }
    }

    public function destroy($id)
    {
        $item = Reservacion::findOrFail($id);
        if ($item->delete()) {
            return new ReservacionResource($item);
        }
    }
}
