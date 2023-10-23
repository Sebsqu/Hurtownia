<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cases;

class CaseController extends Controller
{
    public function showCases()
    {
        $cases = Cases::all();
        return view('items.caselist', ['cases' => $cases]);
    }

    public function addToCart1($id)
    {
        $case = Cases::find($id);
        $cart = session()->get('cart_cases', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "fullname" => $case->case_fullname,
                "price" => $case->case_price,
                "quantity" => 1,
            ];
        }
        session()->put('cart_cases', $cart);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do koszyka!');
    }

    public function addCase(Request $request)
    {
        $data = [
            'case_fullname'=>$request->case_fullname,
            'case_type'=>$request->case_type,
            'case_standard'=>$request->case_standard,
            'case_fans'=>$request->case_fans,
            'case_side_panel'=>$request->case_side_panel,
            'case_price'=>(float)$request->case_price,
            'case_image_path'=>$request->case_image_path,
        ];
        Cases::create($data);
        return redirect()->back()->with('success', 'Produkt został pomyślnie dodany do bazy!');
    }

    public function showCases2()
    {
        $cases = Cases::all();
        return view('items.edit.caseList2', ['cases' => $cases]);
    }

    public function editCase($id)
    {
        $case = Cases::find($id);
        return view('items.edit.editCaseList', ['case' => $case]);
    }

    public function updateCase(Request $request, $id)
    {
        $case = Cases::find($id);

        $data = [
            'case_fullname' => $request->input('case_fullname'),
            'case_type' => $request->input('case_type'),
            'case_standard' => $request->input('case_standard'),
            'case_fans' => $request->input('case_fans'),
            'case_side_panel' => $request->input('case_side_panel'),
            'case_price' => (float) $request->input('case_price'),
            'case_image_path' => $request->input('case_image_path'),
        ];

        $case->update($data);
        return redirect('/')->with('success', 'Obudowa została zaktualizowana!');
    }

    public function destroy($id)
    {
        $case = Cases::find($id);
        if (!$case) {
            return redirect('/');
        }

        $case->delete();
        return redirect('/');
    }
}
