<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mbs;

class MbController extends Controller
{
    public function showMb(){
        $mbs = Mbs::all();
        return view('items.mbList',['mbs'=>$mbs]);
    }
}
