<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\OfferController;

Route::get('/', [AllController::class, 'index' ])->name('home');
Route::get('/offers/', [AllController::class, 'indexOffer'])->name('allOffers');