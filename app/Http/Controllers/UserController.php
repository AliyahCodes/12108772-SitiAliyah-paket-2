<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('User.User', compact('data'));
    }

    public function create()
    {
        return view('User.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect('/User')->with('success', 'Berhasil Menambahkan data baru!');
    }

    public function edit($id)
    {
        $data = User::where('id', '=', $id)->first();
        return view('User.update', compact(('data')));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',

        ]);

        User::where('id', '=', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect('/User')->with('success', 'Berhasil Mengubah data baru!');

    }

    public function destroy($id)
    {
        $td = User::where('id', '=',$id)->first();
        $td->delete();
         
        return redirect('/User')->with('success', 'Berhasil Menghapus data');
    }


}
