<?php

use App\Http\Controllers\Api\JobPortalController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\StateController;
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


Route::get('/job-portals', [JobPortalController::class,'index'])->name('apiHome');
Route::get('/job-portals/{id}', [JobPortalController::class, 'show'])->name('apiShow');
Route::delete('/job-portals/{id}',[JobPortalController::class, 'destroy'])->name('apiDestroy');
Route::post('/job-portals',[JobPortalController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/job-portals/{id}',[JobPortalController::class, 'update'])->name('apiUpdate');

Route::get('/tech-stacks', [TechStackController::class,'index'])->name('apiHome');
Route::get('/tech-stacks/{id}', [TechStackController::class, 'show'])->name('apiShow');
Route::delete('/tech-stacks/{id}',[TechStackController::class, 'destroy'])->name('apiDestroy');
Route::post('/tech-stacks',[TechStackController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/tech-stacks/{id}',[TechStackController::class, 'update'])->name('apiUpdate');

Route::get('/states', [StateController::class,'index'])->name('apiHome');
Route::get('/states/{id}', [StateController::class, 'show'])->name('apiShow');
Route::delete('/states/{id}',[StateController::class, 'destroy'])->name('apiDestroy');
Route::post('/states',[StateController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/states/{id}',[StateController::class, 'update'])->name('apiUpdate');

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
