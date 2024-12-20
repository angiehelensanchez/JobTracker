<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{

    public function index()
    {
        $Offers = Offer::all();
        return response()->json($Offers, 200);
    }

    public function store(Request $request)
    {
        $offer = Offer::create($request->all());
        $offer->save();
        return response()->json($offer,200);
    }


    public function show(string $offerId)
    {
        $offer = Offer::find($offerId);
        return response()->json($offer,200);
    }

    public function update(Request $request, string $offerId)
    {
        $offer = Offer::find($offerId);
        $offer->update($request->all());
        $offer->save();
        return response()->json($offer,200);
    }

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
