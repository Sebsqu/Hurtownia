<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartTotalValue = $this->calculateTotalValue();
        return view('shoppingCart', compact('cartTotalValue'));
    }

    public function calculateTotalValue()
    {
        $totalValue = 0;

        $cartCpus = session('cart_cpus', []);
        $cartCases = session('cart_cases', []);
        $cartDisks = session('cart_disks', []);
        $cartGpus = session('cart_gpus', []);
        $cartMbs = session('cart_mbs', []);
        $cartPsus = session('cart_psus', []);
        $cartRams = session('cart_rams', []);

        foreach ($cartCpus as $cpu) 
        {
            $totalValue += $cpu['price'] * $cpu['quantity'];
        }
        foreach ($cartCases as $case) 
        {
            $totalValue += $case['price'] * $case['quantity'];
        }
        foreach ($cartDisks as $disk) 
        {
            $totalValue += $disk['price'] * $disk['quantity'];
        }
        foreach ($cartGpus as $gpu) 
        {
            $totalValue += $gpu['price'] * $gpu['quantity'];
        }
        foreach ($cartMbs as $mb) 
        {
            $totalValue += $mb['price'] * $mb['quantity'];
        }
        foreach ($cartPsus as $psu) 
        {
            $totalValue += $psu['price'] * $psu['quantity'];
        }
        foreach ($cartRams as $ram) 
        {
            $totalValue += $ram['price'] * $ram['quantity'];
        }

        return $totalValue;
    }

    public function remove($category, $id)
    {
        $sessionKey = 'cart_' . $category;
        if (session()->has($sessionKey)) 
        {
            $cartItems = session($sessionKey);
            if (array_key_exists($id, $cartItems)) 
            {
                unset($cartItems[$id]);
                session([$sessionKey => $cartItems]);
                return redirect()->route('cart')->with('success', 'Przedmiot został usunięty z koszyka.');
            }
        }
        return redirect()->route('cart')->with('error', 'Nie można usunąć przedmiotu z koszyka.');
    }

}
