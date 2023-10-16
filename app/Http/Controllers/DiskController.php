<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disks;

class DiskController extends Controller
{
    public function showDisk(){
        $disks = Disks::all();
        return view('items.diskList',['disks' => $disks]);
    }
}
