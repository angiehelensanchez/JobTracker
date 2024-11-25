<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\TechStack;

class TechStackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $techStack = TechStack::all();
        return response()->json($techStack,200);
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
        $techStack = TechStack::create($request->all());
        $techStack->save(); 
        return response()->json($techStack,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $techStackId)
    {
        $techStack = TechStack::find($techStackId);
        return response()->json($techStack,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TechStack $techStack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $techStackId)
    {
        $techStack=TechStack::find( $techStackId );

        $techStack->update($request->all());
        $techStack->save();
        return response()->json($techStack,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $techStackId)
    {
        $techStack = Company::find($techStackId);
        $techStack->delete();
    }
}
