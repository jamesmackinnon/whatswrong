<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Injuries;

class InjuryController extends Controller
{
    public function index() {
        
            return Injuries::find(1)->toJson();
        
    }
}
