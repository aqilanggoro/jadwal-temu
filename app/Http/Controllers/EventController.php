<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        
        return view('jadwal')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('uraian', $request->uraian);
        Session::flash('tanggal_mulai', $request->tanggal_mulai);
        Session::flash('tanggal_berakhir', $request->tanggal_berakhir);
        Session::flash('location', $request->location);

        $request->validate([
            'uraian' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
    
            'location' => 'required',

        ],[
            'uraian.required' => 'uraian wajib diisi',
            'tanggal_mulai' => 'tanggal mulai wajib diisi',
            'tanggal_berakhir' => 'tanggal berakhir wajib diisi',
            'location' => 'lokasi wajib diisi',

        ]);
        $data = [
            'uraian' => $request->uraian,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'lampiran' => $request->lampiran,
            'location' => $request->location,
            'status'=> 'Belum Terlaksana',
        ];
        jadwal::create($data);
        return redirect()->to('jadwal')->with('success', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = jadwal::where('uraian', $id)->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'uraian' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
    
            'location' => 'required',

        ],[
            'uraian.required' => 'uraian wajib diisi',
            'tanggal_mulai' => 'tanggal mulai wajib diisi',
            'tanggal_berakhir' => 'tanggal berakhir wajib diisi',
            'location' => 'lokasi wajib diisi',

        ]);
        $data = [
            'uraian' => $request->uraian,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_berakhir' => $request->tanggal_berakhir,
            'lampiran' => $request->lampiran,
            'location' => $request->location,
            'status' => $request->status,
        ];
        jadwal::where('uraian', $id)->update($data);
        return redirect()->to('jadwal')->with('success', 'Berhasil Update Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jadwal::where('uraian', $id)->delete();
        return redirect()->to('jadwal')->with('success', 'Berhasil Menghapus Data');
    }
}
