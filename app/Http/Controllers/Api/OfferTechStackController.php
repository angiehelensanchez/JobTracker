<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OfferTechStack;

class OfferTechStackController extends Controller
{

    public function index()
    {
        $techOffers = OfferTechStack::all();
        return response()->json($techOffers, 200);
    }

    public function show(string $techOfferId)
    {
        $techOffer = OfferTechStack::find($techOfferId);
        return response()->json($techOffer,200);
    }

    public function destroy(string $techOfferId)
    {
        $techOffer = OfferTechStack::find($techOfferId);
        $techOffer->delete();
    }
}
