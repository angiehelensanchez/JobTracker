<?php

use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\AdvanceController;
use App\Http\Controllers\Api\TechStackController;
use App\Http\Controllers\Api\OfferTechStackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/tech-stacks', [TechStackController::class,'index'])->name('apiTechStackHome');
Route::get('/tech-stacks/{id}', [TechStackController::class, 'show'])->name('apiTechStackShow');
Route::delete('/tech-stacks/{id}',[TechStackController::class, 'destroy'])->name('apiTechStackDestroy');
Route::post('/tech-stacks',[TechStackController::class, 'store'])->name('apiTechStackStore');
Route::put('/tech-stacks/{id}',[TechStackController::class, 'update'])->name('apiTechStackUpdate');

Route::get('/advances', [AdvanceController::class,'index'])->name('apiAdvanceHome');
Route::get('/advances/{id}', [AdvanceController::class, 'show'])->name('apiAdvanceShow');
Route::delete('/advances/{id}',[AdvanceController::class, 'destroy'])->name('apiAdvanceDestroy');
Route::post('/advances',[AdvanceController::class, 'store'])->name('apiAdvanceStore');
Route::put('/advances/{id}',[AdvanceController::class, 'update'])->name('apiAdvanceUpdate');

Route::get('/offers', [OfferController::class,'index'])->name('apiOfferHome');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('apiOfferShow');
Route::delete('/offers/{id}',[OfferController::class, 'destroy'])->name('apiOfferDestroy');
Route::post('/offers',[OfferController::class, 'store'])->name('apiOfferStore');
Route::put('/offers/{id}',[OfferController::class, 'update'])->name('apiOfferUpdate');
Route::post('/offers/{id}/tech-stacks',[OfferController::class, 'attachTechStack'])->name('apiAttachOfferTech');



Route::get('/tech-offer', [OfferTechStackController::class,'index'])->name('apiHome');
Route::get('/tech-offer/{id}', [OfferTechStackController::class, 'show'])->name('apiShow');
Route::delete('/tech-offer/{id}',[OfferTechStackController::class, 'destroy'])->name('apiDestroy');
Route::put('/tech-offer/{id}',[OfferTechStackController::class, 'update'])->name('apiUpdate');


