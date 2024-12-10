<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advance;

class AdvanceController extends Controller
{

    public function index()
    {
        $advances = Advance::all();
        return response()->json($advances,200);
    }
    public function store(Request $request)
    {
        $advance = Advance::create($request->all());
        $advance->save();
        return response()->json($advance, 200);
    }

    public function show(string $advanceId)
    {
        $advance = Advance::find($advanceId);
        return response()->json($advance,200);
    }

    public function update(Request $request, string $advanceId)
    {
        $advance = Advance::find($advanceId);
        $advance->update($request->all());
        return response()->json($advance,200);
    }


    public function destroy(string $advanceId)
    {
        $advance = Advance::find($advanceId);
        $advance->delete();
    }
}
