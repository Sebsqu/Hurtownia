<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpus;

class CpuController extends Controller
{
    public function showCpu()
    {
        $cpus = Cpus::all();
        return view('items.cpuList', ['cpus' => $cpus]);
    }

    public function addToCart2($id)
    {
        $cpu = Cpus::find($id);
        $cart = session()->get('cart_cpus', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $cpu->cpu_fullname,
                "price" => $cpu->cpu_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_cpus', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }
}
