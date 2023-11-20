<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Psus;
use Illuminate\Support\Facades\Storage;

class PsuController extends Controller
{
    public function showPsu(){
        $psus = Psus::all();
        return view('items.psuList',['psus'=>$psus]);
    }

    public function addToCart6($id)
    {
        $psu = Psus::find($id);
        $cart = session()->get('cart_psus', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $psu->psu_fullname,
                "price" => $psu->psu_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_psus', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }

    public function addPsu(Request $request)
    {
        
        $data = [
            'psu_fullname'=>$request->psu_fullname,
            'psu_power'=>$request->psu_power,
            'psu_standard'=>$request->psu_standard,
            'psu_efficiency'=>$request->psu_efficiency,
            'psu_certificate'=>$request->psu_certificate,
            'psu_price'=>(float)$request->psu_price,
            'psu_image_path'=>$request->psu_image_path,
        ];

        $image = $request->file('image') ?? null;
        $imageName = $image ? time() . '.' . $image->getClientOriginalExtension() : null;
        $imageName && $image->move(public_path('images/psu'), $imageName);
        $data['psu_image_path'] = $imageName;

        Psus::create($data);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do bazy!');
    }

    public function showPsus2()
    {
        $psus = Psus::all();
        return view('items.edit.psuList2', ['psus' => $psus]);
    }

    public function editPsu($id)
    {
        $psu = Psus::find($id);
        return view('items.edit.editPsuList', ['psu' => $psu]);
    }

    public function updatePsu(Request $request, $id)
    {
        $psu = Psus::find($id);

        $data = [
            'psu_fullname' => $request->input('psu_fullname'),
            'psu_power' => $request->input('psu_power'),
            'psu_standard' => $request->input('psu_standard'),
            'psu_efficiency' => $request->input('psu_efficiency'),
            'psu_certificate' => $request->input('psu_certificate'),
            'psu_price' => (float) $request->input('psu_price'),
            'psu_image_path' => $request->input('psu_image_path'),
        ];

        $image = $request->file('image') ?? null;
        $imageName = $image ? time() . '.' . $image->getClientOriginalExtension() : null;
        $imageName && $image->move(public_path('images/psu'), $imageName);
        $data['psu_image_path'] = $imageName;

        $psu->update($data);
        return redirect('/')->with('success', 'Dysk został zaktualizowany!');
    }

    public function destroy($id)
    {
        $psu = Psus::find($id);
        if (!$psu) {
            return redirect('/');
        }

        $psu->delete();
        return redirect('/');
    }

}
