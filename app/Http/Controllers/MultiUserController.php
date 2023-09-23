<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultiUserController extends Controller
{
    function index()
    {
        return view('multiuser');
    }
    function kepala()
    {
        return view('multiuser');

    }
    function kel_bidang()
    {
        return view('multiuser');
    }
    function seketaris()
    {
        return view('multiuser');
    }
    function seksi()
    {
        return view('multiuser');
    }
    function a1()
    {
        return view('multiuser');
    }
}
