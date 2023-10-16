<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rams;

class RamController extends Controller
{
    public function showRam(){
        $rams = Rams::all();
        return view('items.ramList',['rams'=>$rams]);
    }
}
