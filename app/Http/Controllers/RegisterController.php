<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form()
    {
        return view('register');
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'role' => 'required|in:kepala,kel_bidang,seketaris,seksi',
            'password' => 'required|min:4|confirmed',
        ]);

        User::create([
            'name'=>$request->nama,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>bcrypt($request->password)
        ]);
        return redirect('')->with('pesan','berhasil');
    }
}
