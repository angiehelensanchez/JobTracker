<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CompanyController;




Route::get('/', [CompanyController::class,'index'])->name('apiHome');
Route::get('/companies/{id}', [CompanyController::class, 'show'])->name('apiShow');
Route::delete('/companies/{id}',[CompanyController::class, 'destroy'])->name('apiDestroy');
Route::post('/companies',[CompanyController::class, 'store'])->name('apiStore');
Route::put('/companies/{id}',[CompanyController::class, 'update'])->name('apiUpdate');