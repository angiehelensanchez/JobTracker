<?php

use App\Http\Controllers\Api\JobPortalController;
use App\Http\Controllers\Api\TechStackController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CompanyController;




Route::get('/companies', [CompanyController::class,'index'])->name('apiHome');
Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('apiShow');
Route::delete('/companies/{id}',[CompanyController::class, 'destroy'])->name('apiDestroy');
Route::post('/companies',[CompanyController::class, 'store'])->name('apiStore');
Route::put('/companies/{id}',[CompanyController::class, 'update'])->name('apiUpdate');


Route::get('/job_portals', [JobPortalController::class,'index'])->name('apiHome');
Route::get('/job_portals/{id}', [JobPortalController::class, 'show'])->name('apiShow');
Route::delete('/job_portals/{id}',[JobPortalController::class, 'destroy'])->name('apiDestroy');
Route::post('/job_portals',[JobPortalController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/job_portals/{id}',[JobPortalController::class, 'update'])->name('apiUpdate');

Route::get('/tech_stacks', [TechStackController::class,'index'])->name('apiHome');
Route::get('/tech_stacks/{id}', [TechStackController::class, 'show'])->name('apiShow');
Route::delete('/tech_stacks/{id}',[TechStackController::class, 'destroy'])->name('apiDestroy');
Route::post('/tech_stacks',[TechStackController::class, 'store'])->name('apiStoreJobPortals');
Route::put('/tech_stacks/{id}',[TechStackController::class, 'update'])->name('apiUpdate');