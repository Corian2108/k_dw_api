<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TableResource;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $table = Table::paginate(10);
        return TableResource::collection($table);
    }

    public function store(Request $request)
    {
        $table = new Table();
        $table->numero_mesa = $request->numero_mesa;

        if ($table->save()) {
            return new TableResource($table);
        }
    }

    public function show($id)
    {
        $table = Table::findOrFail($id);
        return new TableResource($table);
    }

    public function update(Request $request, $id)
    {
        $table = Table::findOrFail($id);
        $table->numero_mesa = $request->numero_mesa;

        if ($table->save()) {
            return new TableResource($table);
        }
    }

    public function destroy($id)
    {
        $table = Table::findOrFail($id);

        if ($table->delete()) {
            return new TableResource($table);
        }
    }
}
