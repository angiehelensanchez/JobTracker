<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Offers = Offer::all();
        return response()->json($Offers, 200);
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
        $offer = Offer::create($request->all());
        $offer->save();
        return response()->json($offer,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $offerId)
    {
        $offer = Offer::find($offerId);
        return response()->json($offer,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $offerId)
    {
        $offer = Offer::find($offerId);
        $offer->update($request->all());
        $offer->save();
        return response()->json($offer,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $offerId)
    {
        $offer = Offer::find($offerId);
        $offer->delete();
    }

    public function attachTechStack(Request $request, string $offerId)  
    {
        $offer = Offer::find($offerId);

        foreach ($request['stack_id'] as $tech)
        {
            $offer->techStacks()->attach($tech);
        }
        return response()->json(status:200);

    }
}
