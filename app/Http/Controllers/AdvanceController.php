<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advance;
use Illuminate\Http\Request;

class AdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Advance::all();
    }

    
    public function show(Advance $advance)
    {
        //
    }

}
