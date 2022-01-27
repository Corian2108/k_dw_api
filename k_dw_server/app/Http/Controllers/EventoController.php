<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Http\Resources\EntradaResource;
use App\Http\Resources\EventoResource;

class EventoController extends Controller
{
    public function index()
    {
        $evento = Evento::all();
        return $evento;
    }

    public function store(Request $request)
    {
        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->descripcion = $request->descripcion;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->precio = $request->precio;
        $evento->aforo = $request->aforo;

        if ($evento->save()) {
            return new EventoResource($evento);
        }
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return new EventoResource($evento);
    }

    public function edit($id)
    {
        $evento = Evento::find($id);
        return new EventoResource($evento);
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->nombre = $request->nombre;

        if ($evento->save()) {
            return new EventoResource($evento);
        }
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        if ($evento->delete()) {
            return new EventoResource($evento);
        }
    }
}
