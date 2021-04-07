<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\StateResource;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        $state = State::paginate(10);
        return StateResource::collection($state);
    }

    public function store(Request $request)
    {
        $state = new State();
        $state->state_id = $request->state_id;
        $state->descripcion = $request->descripcion;

        if ($state->save()) {
            return new StateResource($state);
        }
    }

    public function show($id)
    {
        $state = State::findOrFail($id);
        return new StateResource($state);
    }

    public function update(Request $request, $id)
    {
        $state = State::findOrFail($id);
        $state->state_id = $request->state_id;
        $state->descripcion = $request->descripcion;

        if ($state->save()) {
            return new StateResource($state);
        }
    }

    public function destroy($id)
    {
        $state = State::findOrFail($id);

        if ($state->delete()) {
            return new StateResource($state);
        }
    }
}
