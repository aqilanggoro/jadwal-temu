@extends('tamplatecrud')
@section('konten')
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="pb-3">
          <a href='{{url('multiuser')}}' class="btn btn-secondary"><< kembali</a>
        </div>
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{url('jadwal')}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{url ('jadwal/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
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
                        <td>{{$item->status}}</td>
                        <td>
                            <a href='{{url('jadwal/'.$item->uraian.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>

                            <form onsubmit="return confirm('Apakah anda ingin mengahapus jadwal?')" class='d-inline' action="{{url('jadwal/'. $item->uraian)}}"method="post">
                              @csrf
                              @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            
                            </form>
                            
                        </td>
                    </tr>
                    <?php $i++ ?>
                      @endforeach
                    </tbody>
                </table>
               {{$data->withQueryString()->links()}}
          </div>
          <!-- AKHIR DATA -->
          @endsection