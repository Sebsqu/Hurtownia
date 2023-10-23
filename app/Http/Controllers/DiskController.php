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

    public function addDisk(Request $request)
    {
        
        $data = [
            'disk_fullname'=>$request->disk_fullname,
            'disk_capacity'=>$request->disk_capacity,
            'disk_interface'=>$request->disk_interface,
            'disk_format'=>$request->disk_format,
            'disk_read_speed'=>$request->disk_read_speed,
            'disk_write_speed'=>$request->disk_write_speed,
            'disk_price'=>(float)$request->disk_price,
            'disk_image_path'=>$request->disk_image_path,
        ];
        Disks::create($data);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do bazy!');
    }

    public function showDisks2()
    {
        $disks = Disks::all();
        return view('items.edit.diskList2', ['disks' => $disks]);
    }

    public function editDisk($id)
    {
        $disk = Disks::find($id);
        return view('items.edit.editDiskList', ['disk' => $disk]);
    }

    public function updateDisk(Request $request, $id)
    {
        $disk = Disks::find($id);

        $data = [
            'disk_fullname' => $request->input('disk_fullname'),
            'disk_capacity' => $request->input('disk_capacity'),
            'disk_interface' => $request->input('disk_interface'),
            'disk_format' => $request->input('disk_format'),
            'disk_read_speed' => $request->input('disk_read_speed'),
            'disk_write_speed' => $request->input('disk_write_speed'),
            'disk_price' => (float) $request->input('disk_price'),
            'disk_image_path' => $request->input('disk_image_path'),
        ];

        $disk->update($data);
        return redirect('/')->with('success', 'Dysk został zaktualizowany!');
    }

    public function destroy($id)
    {
        $disk = Disks::find($id);
        if (!$disk) {
            return redirect('/');
        }

        $disk->delete();
        return redirect('/');
    }

}
