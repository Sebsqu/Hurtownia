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

    public function addToCart6($id)
    {
        $psu = Psus::find($id);
        $cart = session()->get('cart_psus', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $psu->psu_fullname,
                "price" => $psu->psu_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_psus', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }
}
