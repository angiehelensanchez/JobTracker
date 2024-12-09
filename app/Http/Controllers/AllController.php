<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\TechStackController;


class AllController extends Controller
{
    
    public function index(){
        $offers = app(OfferController::class)->showSomeOffersWithLastAdvance();
        $techStacks = app(TechStackController::class)->index();
        $dateToday = localtime();

        return view('home', compact('offers',  'techStacks', 'dateToday'));

    }

    public function indexOffer(Request $request){
        $offers = app(OfferController::class)->showAllOffersWithLastAdvance();

        if ($request->filled('state')) {
            $offers = $offers->filter(function ($offer) use ($request) {
                return $offer->state === $request->state;
            });
        }

        if ($request->filled('company_name')) {
            $offers = $offers->filter(function ($offer) use ($request) {
                return stripos($offer->company_name, $request->company_name) !== false;
            });
        }


        return view('allOfferList', compact('offers'));
    }
}
