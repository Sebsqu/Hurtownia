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

    public function addToCart3($id)
    {
        $disk = Disks::find($id);
        $cart = session()->get('cart_disks', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $disk->disk_fullname,
                "price" => $disk->disk_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_disks', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }
}
