<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gpus;

class GpuController extends Controller
{
    public function showGpu() {
        $gpus = Gpus::all();
        return view('items.gpuList', ['gpus' => $gpus]);
    }
}
