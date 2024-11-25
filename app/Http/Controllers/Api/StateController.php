<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::all();
        return response()->json($states,200);
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
        $state = State::create($request->all());
        $state->save();
        return response()->json($state, 200);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $stateId)
    {
        $state = State::find($stateId);
        return response()->json($state,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $stateId)
    {
        $state = State::find($stateId);
        $state->update($request->all());
        return response()->json($state,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $stateId)
    {
        $state = State::find($stateId);
        $state->delete();
    }
}
