<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gpus;

class GpuController extends Controller
{
    public function showGpu() {
        $gpus = Gpus::all();
        return view('items.gpuList', ['gpus' => $gpus]);
    }
    public function addToCart4($id)
    {
        $gpu = Gpus::find($id);
        $cart = session()->get('cart_gpus', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $gpu->gpu_fullname,
                "price" => $gpu->gpu_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_gpus', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }

    public function addGpu(Request $request)
    {
        
        $data = [
            'gpu_fullname'=>$request->gpu_fullname,
            'gpu_connector'=>$request->gpu_connector,
            'gpu_memory'=>$request->gpu_memory,
            'gpu_memory_bus'=>$request->gpu_memory_bus,
            'gpu_timing'=>$request->gpu_timing,
            'gpu_charger'=>$request->gpu_charger,
            'gpu_outputs'=>$request->gpu_outputs,
            'gpu_price'=>(float)$request->gpu_price,
            'gpu_image_path'=>$request->gpu_image_path,
        ];
        Gpus::create($data);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do bazy!');
    }

    public function showGpus2()
    {
        $gpus = Gpus::all();
        return view('items.edit.gpuList2', ['gpus' => $gpus]);
    }

    public function editGpu($id)
    {
        $gpu = Gpus::find($id);
        return view('items.edit.editGpuList', ['gpu' => $gpu]);
    }

    public function updateGpu(Request $request, $id)
    {
        $gpu = Gpus::find($id);

        $data = [
            'gpu_fullname' => $request->input('gpu_fullname'),
            'gpu_connector' => $request->input('gpu_connector'),
            'gpu_memory' => $request->input('gpu_memory'),
            'gpu_memory_bus' => $request->input('gpu_memory_bus'),
            'gpu_timing' => $request->input('gpu_timing'),
            'gpu_outputs' => $request->input('gpu_outputs'),
            'gpu_price' => (float) $request->input('gpu_price'),
            'gpu_image_path' => $request->input('gpu_image_path'),
        ];

        $gpu->update($data);
        return redirect('/')->with('success', 'GPU została zaktualizowana!');
    }

    public function destroy($id)
    {
        $gpu = Gpus::find($id);
        if (!$gpu) {
            return redirect('/');
        }

        $gpu->delete();
        return redirect('/');
    }
}
