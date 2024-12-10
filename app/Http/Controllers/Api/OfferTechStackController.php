<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OfferTechStack;

class OfferTechStackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $techOffers = OfferTechStack::all();
        return response()->json($techOffers, 200);
    }

    public function store(Request $request)
    {
        $techOffer = OfferTechStack::create($request->all());
        $techOffer->save();
        return response()->json($techOffer,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $techOfferId)
    {
        $techOffer = OfferTechStack::find($techOfferId);
        return response()->json($techOffer,200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $techOfferId)
    {
        $techOffer = OfferTechStack::find($techOfferId);
        $techOffer->delete();
    }
}
