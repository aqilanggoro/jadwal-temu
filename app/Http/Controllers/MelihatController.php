<?php

namespace App\Http\Controllers;
use App\Models\jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class MelihatController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 2;
        if(strlen($katakunci)){
            $data = jadwal::where('uraian','like', "%$katakunci%" )
            ->orWhere('tanggal_mulai', 'like', "%$katakunci%")
            ->paginate($jumlahbaris);
        }else{
            $data = jadwal::orderby('uraian', 'desc')->paginate($jumlahbaris);
        }

        
        return view('melihat')->with('data', $data);
    }
}
