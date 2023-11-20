<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mbs;
use Illuminate\Support\Facades\Storage;

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

    public function addMb(Request $request)
    {
        
        $data = [
            'mb_fullname'=>$request->mb_fullname,
            'mb_format'=>$request->mb_format,
            'mb_socket'=>$request->mb_socket,
            'mb_chipset'=>$request->mb_chipset,
            'mb_supported_processors'=>$request->mb_supported_processors,
            'mb_price'=>(float)$request->mb_price,
            'mb_image_path'=>$request->mb_image_path,
        ];

        $image = $request->file('image') ?? null;
        $imageName = $image ? time() . '.' . $image->getClientOriginalExtension() : null;
        $imageName && $image->move(public_path('images/mb'), $imageName);
        $data['mb_image_path'] = $imageName;

        Mbs::create($data);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do bazy!');
    }

    public function showMbs2()
    {
        $mbs = Mbs::all();
        return view('items.edit.mbList2', ['mbs' => $mbs]);
    }

    public function editMb($id)
    {
        $mb = Mbs::find($id);
        return view('items.edit.editMbList', ['mb' => $mb]);
    }

    public function updateMb(Request $request, $id)
    {
        $mb = Mbs::find($id);

        $data = [
            'mb_fullname' => $request->input('mb_fullname'),
            'mb_format' => $request->input('mb_format'),
            'mb_socket' => $request->input('mb_socket'),
            'mb_chipset' => $request->input('mb_chipset'),
            'mb_supported_processors' => $request->input('mb_supported_processors'),
            'mb_price' => (float) $request->input('mb_price'),
            'mb_image_path' => $request->input('mb_image_path'),
        ];

        $image = $request->file('image') ?? null;
        $imageName = $image ? time() . '.' . $image->getClientOriginalExtension() : null;
        $imageName && $image->move(public_path('images/mb'), $imageName);
        $data['mb_image_path'] = $imageName;

        $mb->update($data);
        return redirect('/')->with('success', 'Płyta główna została zaktualizowana!');
    }

    public function destroy($id)
    {
        $mb = Mbs::find($id);
        if (!$mb) {
            return redirect('/');
        }

        $mb->delete();
        return redirect('/');
    }
}
