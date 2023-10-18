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
    public function addToCart4($id)
    {
        $gpu = Gpus::find($id);
        $cart = session()->get('cart_gpus', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $gpu->gpu_fullname,
                "price" => $gpu->gpu_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_gpus', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }
}
