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

    public function addToCart5($id)
    {
        $mb = Mbs::find($id);
        $cart = session()->get('cart_mbs', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $mb->mb_fullname,
                "price" => $mb->mb_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_mbs', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }
}
