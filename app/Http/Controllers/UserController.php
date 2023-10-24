<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function adminIndex()
    {
        $users = User::All();
        return view('admin.userIndex', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect('/');
        }
        return view('admin.editUser', compact('user'));
    }
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('/');
        }

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->role_id = $request->input('role_id');
    
        $user->save();

        return redirect('/');
}

    public function deleteUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect('/');
        }
        $user->delete();
        return redirect('/');
    }
}
