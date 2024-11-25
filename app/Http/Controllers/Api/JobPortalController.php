<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPortal;

class JobPortalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobPortals = JobPortal::all();
        return response()->json($jobPortals, 200);
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
        $jobPortal = JobPortal::create($request->all());
        $jobPortal->save();
        return response()->json($jobPortal, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $jobPortalId)
    {
        $jobPortal = JobPortal::find($jobPortalId);
        return response()->json($jobPortal,200);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPortal $jobPortal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $jobPortalId)
    {
        $jobPortal= JobPortal::find($jobPortalId);
        $jobPortal->update($request->all());
        $jobPortal->save();
        return response()->json($jobPortal,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $jobPortalId)
    {
        $jobPortal = JobPortal::find($jobPortalId);
        $jobPortal->delete();
    }
}
