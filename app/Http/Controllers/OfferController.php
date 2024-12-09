<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Offer::with('advances')->get();
    }
    
    public function showSomeOffersWithLastAdvance()
    {
        return Offer::with(['advances' => function($query){$query->orderBy('updated_at','desc')->limit(1);}])->orderBy('updated_at','desc')->limit(12)->get();
    }

    public function showAllOffersWithLastAdvance(){
        return Offer::with(['advances' => function($query){$query->orderBy('updated_at','desc')->limit(1);}])->orderBy('updated_at','desc')->get();
    }
   
    public function show(string $offer_id)
    {
        $offer =Offer::find($offer_id);
        return view("show",compact("offer"));
    }

}
