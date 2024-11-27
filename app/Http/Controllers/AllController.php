<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\TechStackController;


class AllController extends Controller
{
    
    public function index(){
        $companies = app(CompanyController::class)->index();
        $offers = app(OfferController::class)->index();
        $techStacks = app(TechStackController::class)->index();
        $advances = app(AdvanceController::class)->index();
        
        return view('home', compact('companies', 'offers', 'advances'));

    }
}
