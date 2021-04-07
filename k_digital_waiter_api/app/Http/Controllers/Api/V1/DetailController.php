<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DetailResource;
use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $detail = Detail::paginate(10);
        return DetailResource::collection($detail);
    }

    public function store(Request $request)
    {
        $detail = new Detail();
        $detail->dish_id = $request->dish_id;
        $detail->cantidad = $request->cantidad;
        $detail->total = $request->total;

        if ($detail->save()) {
            return new DetailResource($detail);
        }
    }

    public function show($id)
    {
        $detail = Detail::findOrFail($id);
        return new DetailResource($detail);
    }

    public function update(Request $request, $id)
    {
        $detail = Detail::findOrFail($id);
        $detail->dish_id = $request->dish_id;
        $detail->cantidad = $request->cantidad;
        $detail->total = $request->total;

        if ($detail->save()) {
            return new DetailResource($detail);
        }
    }

    public function destroy($id)
    {
        $detail = Detail::findOrFail($id);

        if ($detail->delete()) {
            return new DetailResource($detail);
        }
    }
}
