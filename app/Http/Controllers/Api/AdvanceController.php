<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advance;

class AdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advances = Advance::all();
        return response()->json($advances,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $advance = Advance::create($request->all());
        $advance->save();
        return response()->json($advance, 200);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $advanceId)
    {
        $advance = Advance::find($advanceId);
        return response()->json($advance,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advance $advance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $advanceId)
    {
        $advance = Advance::find($advanceId);
        $advance->update($request->all());
        return response()->json($advance,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $advanceId)
    {
        $advance = Advance::find($advanceId);
        $advance->delete();
    }
}
