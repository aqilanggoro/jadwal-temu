<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
        
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'

        ],[
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi'
        ]); 
        
        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];
        if(Auth::attempt($infologin)){
            
            if(Auth::user()->role == 'kepala'){
                return redirect('multiuser/kepala');

            }

            elseif(Auth::user()->role == 'kel_bidang')
            {
                return redirect('multiuser/kel_bidang');
            }

            elseif(Auth::user()->role == 'seketaris')
            {
                return redirect('multiuser/seketaris');
            }
            elseif(Auth::user()->role == 'seksi')
            {
                return redirect('multiuser/seksi');
            }

        }else{
            return redirect('')->withErrors('Username dan Password yang dimasukan tidak sesuai')->withInput();
        }
   
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }


}
