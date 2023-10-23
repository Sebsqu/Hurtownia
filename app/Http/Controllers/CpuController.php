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

    public function addCpu(Request $request)
    {
        
        $data = [
            'cpu_fullname'=>$request->cpu_fullname,
            'cpu_socket'=>$request->cpu_socket,
            'cpu_timing'=>$request->cpu_timing,
            'cpu_cache'=>$request->cpu_cache,
            'cpu_cores'=>$request->cpu_cores,
            'cpu_graphics'=>$request->cpu_graphics,
            'cpu_price'=>(float)$request->cpu_price,
            'cpu_image_path'=>$request->cpu_image_path,
        ];
        Cpus::create($data);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do bazy!');
    }

    public function showCpus2()
    {
        $cpus = Cpus::all();
        return view('items.edit.cpuList2', ['cpus' => $cpus]);
    }

    public function editCpu($id)
    {
        $cpu = Cpus::find($id);
        return view('items.edit.editCpuList', ['cpu' => $cpu]);
    }

    public function updateCpu(Request $request, $id)
    {
        $cpu = Cpus::find($id);

        $data = [
            'cpu_fullname' => $request->input('cpu_fullname'),
            'cpu_image_path' => $request->input('cpu_image_path'),
            'cpu_socket' => $request->input('cpu_socket'),
            'cpu_timing' => $request->input('cpu_timing'),
            'cpu_cache' => $request->input('cpu_cache'),
            'cpu_cores' => $request->input('cpu_cores'),
            'cpu_graphics' => $request->input('cpu_graphics'),
            'cpu_price' => (float) $request->input('cpu_price'),
        ];

        $cpu->update($data);

        return redirect('/')->with('success', 'CPU został zaktualizowany!');
    }

    public function destroy($id)
    {
        $cpu = Cpus::find($id);
        if (!$cpu) {
            return redirect('/');
        }

        $cpu->delete();
        return redirect('/');
    }
}
