<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies, 200);
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
        $company = Company::create([
            "nameCompany"=> $request->nameCompany,
            "country"=> $request->country
        ]);
        $company->save();
        return response()->json($company,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $companyId)
    {
        $company = Company::find($companyId);
        return response()->json($company,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $companyId)
    {
        $company = Company::find($companyId);

        $company->update([
            "name"=> $request->name,
            "country"=> $request->country
        ]);

        $company->save();
        return response()->json($company,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $companyId)
    {
        $company = Company::find($companyId);
        $company->delete();
    }
}
