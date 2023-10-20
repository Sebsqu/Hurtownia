<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $orders = Order::where('id_user', $userId)->get(); // Pobierz wszystkie zamówienia użytkownika
        return view('layouts.order', ['orders' => $orders]);
    }

}
