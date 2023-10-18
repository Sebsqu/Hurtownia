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

    public function addToCart7($id)
    {
        $ram = rams::find($id);
        $cart = session()->get('cart_rams', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $ram->ram_fullname,
                "price" => $ram->ram_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_rams', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }
}
