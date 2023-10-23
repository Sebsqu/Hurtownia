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

    public function addRam(Request $request)
    {
        
        $data = [
            'ram_fullname'=>$request->ram_fullname,
            'ram_type_of_memory'=>$request->ram_type_of_memory,
            'ram_total_capacity'=>$request->ram_total_capacity,
            'ram_capacity'=>$request->ram_capacity,
            'ram_frequency'=>$request->ram_frequency,
            'ram_cycle_latency'=>$request->ram_cycle_latency,
            'ram_price'=>(float)$request->ram_price,
            'ram_image_path'=>$request->ram_image_path,
        ];
        Rams::create($data);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do bazy!');
    }

    public function showRams2()
    {
        $rams = Rams::all();
        return view('items.edit.ramList2', ['rams' => $rams]);
    }

    public function editRam($id)
    {
        $ram = Rams::find($id);
        return view('items.edit.editRamList', ['ram' => $ram]);
    }

    public function updateRam(Request $request, $id)
    {
        $ram = Rams::find($id);

        $data = [
            'ram_fullname' => $request->input('ram_fullname'),
            'ram_type_of_memory' => $request->input('ram_type_of_memory'),
            'ram_total_capacity' => $request->input('ram_total_capacity'),
            'ram_capacity' => $request->input('ram_capacity'),
            'ram_frequency' => $request->input('ram_frequency'),
            'ram_cycle_latency' => $request->input('ram_cycle_latency'),
            'ram_price' => (float) $request->input('ram_price'),
            'ram_image_path' => $request->input('ram_image_path'),
        ];

        $ram->update($data);
        return redirect('/')->with('success', 'Pamięć RAM została zaktualizowana!');
    }

    public function destroy($id)
    {
        $ram = Rams::find($id);
        if (!$ram) {
            return redirect('/');
        }

        $ram->delete();
        return redirect('/');
    }
}
