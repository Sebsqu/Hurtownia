<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

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

    public function checkout(Request $request)
    {
        // Pobierz dane z formularza
        $name = $request->input('name');
        $address = $request->input('address');
        $paymentMethod = $request->input('payment_method');

        // Oblicz całkowitą wartość koszyka
        $cartTotalValue = $this->calculateTotalValue();
        $userId = auth()->user()->id;
        $jsonItems = $this->getCartItems();
        $items = json_decode($jsonItems, true);
        // Zapisz zamówienie w bazie danych
        $order = new Order([
            'id_user' => $userId,
            'items' => implode(', ', $items),
            'total_amount' => $cartTotalValue,
            'order_time' => now(),
            'name' => $name,
            'address' => $address,
            'payment_method' => $paymentMethod,
        ]);

        $order->save();

        // Wyczyść koszyk po złożeniu zamówienia
        $this->clearCart();

        return redirect()->route('cart')->with('success', 'Zamówienie zostało złożone.');
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

    protected function getCartItems()
    {
        $cartItems = [
            'cart_cases' => session('cart_cases'),
            'cart_cpus' => session('cart_cpus'),
            'cart_disks' => session('cart_disks'),
            'cart_gpus' => session('cart_gpus'),
            'cart_mbs' => session('cart_mbs'),
            'cart_psus' => session('cart_psus'),
            'cart_rams' => session('cart_rams'),
        ];
    
        $formattedItems = [];
    
        foreach ($cartItems as $category => $items) {
            if (!empty($items)) {
                $formattedItems[$category] = implode(', ', array_column($items, 'fullname'));
            }
        }
    
        return json_encode($formattedItems);
    }

    protected function clearCart()
    {
        // Wyczyść koszyk dla różnych kategorii produktów
        session()->forget('cart_cases');
        session()->forget('cart_cpus');
        session()->forget('cart_disks');
        session()->forget('cart_gpus');
        session()->forget('cart_mbs');
        session()->forget('cart_psus');
        session()->forget('cart_rams');
    }

}
