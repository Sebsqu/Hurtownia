<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $orders = Order::where('id_user', $userId)->get();
        return view('layouts.order', ['orders' => $orders]);
    }

    public function sellerIndex()
    {
        if(auth()->user()->role_id == 2)
        {
            $orders2 = Order::All();
            return view('seller.orders', ['orders2' => $orders2]);
        }
        else
        {
            return abort(403);
        }
    }

}
