<?php

use App\Http\Controllers\Api\JobPortalController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\AdvanceController;
use App\Http\Controllers\Api\TechStackController;
use App\Http\Controllers\Api\OfferTechStackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CompanyController;




Route::get('/companies', [CompanyController::class,'index'])->name('apiHome');
Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('apiShow');
Route::delete('/companies/{id}',[CompanyController::class, 'destroy'])->name('apiDestroy');
Route::post('/companies',[CompanyController::class, 'store'])->name('apiStore');
Route::put('/companies/{id}',[CompanyController::class, 'update'])->name('apiUpdate');


Route::get('/tech-stacks', [TechStackController::class,'index'])->name('apiHome');
Route::get('/tech-stacks/{id}', [TechStackController::class, 'show'])->name('apiShow');
Route::delete('/tech-stacks/{id}',[TechStackController::class, 'destroy'])->name('apiDestroy');
Route::post('/tech-stacks',[TechStackController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/tech-stacks/{id}',[TechStackController::class, 'update'])->name('apiUpdate');

Route::get('/advances', [AdvanceController::class,'index'])->name('apiHome');
Route::get('/advances/{id}', [AdvanceController::class, 'show'])->name('apiShow');
Route::delete('/advances/{id}',[AdvanceController::class, 'destroy'])->name('apiDestroy');
Route::post('/advances',[AdvanceController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/advances/{id}',[AdvanceController::class, 'update'])->name('apiUpdate');

Route::get('/offers', [OfferController::class,'index'])->name('apiHome');
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('apiShow');
Route::delete('/offers/{id}',[OfferController::class, 'destroy'])->name('apiDestroy');
Route::post('/offers',[OfferController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/offers/{id}',[OfferController::class, 'update'])->name('apiUpdate');

Route::get('/tech-offer', [OfferTechStackController::class,'index'])->name('apiHome');
Route::get('/tech-offer/{id}', [OfferTechStackController::class, 'show'])->name('apiShow');
Route::delete('/tech-offer/{id}',[OfferTechStackController::class, 'destroy'])->name('apiDestroy');
Route::put('/tech-offer/{id}',[OfferTechStackController::class, 'update'])->name('apiUpdate');

Route::post('/offers/{id}/tech-stacks',[OfferController::class, 'attachTechStack'])->name('apiStoreJobPortals');
