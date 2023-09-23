@extends('tamplatecrud')
@section('konten')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{url('multiuser')}}' class="btn btn-secondary"><< kembali</a>
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{url('melihat')}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Uraian</th>
                          <th scope="col">Tanggal Mulai</th>
                          <th scope="col">Tanggal Berakhir</th>
                          <th scope="col">Lokasi</th>
                          <th scope="col">Lampiran</th>
                          <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- agar nomor tidak sama dengan sebelumnya-->
                      <?php $i = $data->firstItem() ?>
                      @foreach ($data as $item)
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$item->uraian}}</td>
                        <td>{{$item->tanggal_mulai}}</td>
                        <td>{{$item->tanggal_berakhir}}</td>
                        <td>{{$item->location}}</td>
                        <td>{{$item->lampiran}}</td>
                        <td>{{$item->status}} </td>
                    </tr>
                    <?php $i++ ?>
                      @endforeach
                    </tbody>
                </table>
               {{$data->withQueryString()->links()}}
          </div>
          <!-- AKHIR DATA -->
          @endsection