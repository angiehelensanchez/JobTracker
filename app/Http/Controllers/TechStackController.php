<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TechStack::orderBy("knowledge", "desc")->get();
    }

   
}
