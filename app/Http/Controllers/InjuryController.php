<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Injuries;
use Illuminate\Support\Facades\Log;

class InjuryController extends Controller
{
    public function index() {
        
            return Injuries::first()->toJson();
        
    }

    public function store(Request $request)
    {
        // Grab record
        $injury = Injuries::first();


            // Update fields explicitly
        $injury->knee = $request->get('knee');
        $injury->hip = $request->get('hip');
        $injury->spinal = $request->get('spinal');
        $injury->wrist = $request->get('wrist');
        $injury->whiplash = $request->get('whiplash');
    
        // $injury->knee = ($request->get('knee') ? 1 : 0);
        // $injury->hip = ($request->get('hip') ? 1 : 0);
        // $injury->spinal = ($request->get('spinal') ? 1 : 0);
        // $injury->wrist = ($request->get('wrist') ? 1 : 0);
        // $injury->whiplash = ($request->get('whiplash') ? 1 : 0);
 
        // Save to db
        $injury->save();

        return response()->json(['success' => true], 200);
     
    }
}
