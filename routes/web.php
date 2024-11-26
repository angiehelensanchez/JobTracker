<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;

Route::get('/', [AllController::class, 'index' ])->name('home');
