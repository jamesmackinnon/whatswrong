<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Injuries;

class SinglePageController extends Controller
{
    
    public function index()
    {
        return view("landing");
    }
}
