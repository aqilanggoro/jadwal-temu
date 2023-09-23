@extends('tamplatecrud')

@section('konten')
<!-- START FORM -->
@if($errors->any())

<div class="pt-3">
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors -> all() as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul>
    </div>
</div>
@endif


<form action='{{url('jadwal')}}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="urain" class="col-sm-2 col-form-label">Uraian</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='uraian' value="{{Session::get('uraian')}}" id="uraian">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal_mulai' value="{{Session::get('tanggal_mulai')}}" id="tanggal_mulai">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal_berakhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggal_berakhir" value="{{Session::get('tanggal_berakhir')}}" id="tanggal_berakhir">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='lampiran'value="{{Session::get('lampiran')}}" id="lampiran">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="location" class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='location' value="{{Session::get('location')}}" id="location">
            </div>
        </div>
     
        
       
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection