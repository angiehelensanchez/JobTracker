<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TechStack;

class TechStackController extends Controller
{

    public function index()
    {
        $techStack = TechStack::all();
        return response()->json($techStack,200);
    }

    public function store(Request $request)
    {
        $techStack = TechStack::create($request->all());
        $techStack->save(); 
        return response()->json($techStack,200);
    }

    public function show(string $techStackId)
    {
        $techStack = TechStack::find($techStackId);
        return response()->json($techStack,200);
    }

    public function update(Request $request, string $techStackId)
    {
        $techStack=TechStack::find( $techStackId );

        $techStack->update($request->all());
        $techStack->save();
        return response()->json($techStack,200);
    }

    public function destroy(string $techStackId)
    {
        $techStack = TechStack::find($techStackId);
        $techStack->delete();
    }
}
