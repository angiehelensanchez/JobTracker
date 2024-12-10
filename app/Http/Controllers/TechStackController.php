<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{

    public function index()
    {
        return TechStack::orderBy("knowledge", "desc")->get();
    }

   
}
