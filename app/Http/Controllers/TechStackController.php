<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $techStack = TechStack::all();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TechStack $techStack)
    {
        //
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
    public function update(Request $request, TechStack $techStack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TechStack $techStack)
    {
        //
    }

}
