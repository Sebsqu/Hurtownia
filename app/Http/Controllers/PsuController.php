<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psus;

class PsuController extends Controller
{
    public function showPsu(){
        $psus = Psus::all();
        return view('items.psuList',['psus'=>$psus]);
    }
}
