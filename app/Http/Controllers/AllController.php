<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\TechStackController;


class AllController extends Controller
{
    
    public function index(){
        $offers = app(OfferController::class)->showLastAdvances();
        $techStacks = app(TechStackController::class)->index();
        $dateToday = localtime();

        return view('home', compact('offers',  'techStacks', 'dateToday'));

    }
}
