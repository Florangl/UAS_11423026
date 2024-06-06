@extends('layout.template')
        <!-- START DATA -->
        @section('konten')
       <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="{{'olahraga'}}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                    <a href="{{ url('olahraga/create') }}" class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-4">Nama Kategori Lapangan</th>
                            <th class="col-md-2">Harga</th>
                            <th class="col-md-3">File</th>
                            <th class="col-md-1">Jumlah Lapangan</th>
                            <th class="col-md-1">Dibuat Oleh</th>
                            <th class="col-md-1">Diperbarui Oleh</th>
                            <th class="col-md-1">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem() ?>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->nama_katlapangan}}</td>
                            <td>{{$item->harga_katlapangan}}</td>
                            <td>{{$item->file_katlapangan}}</td>
                            <td>{{$item->jumlah_lapangan}}</td>
                            <td>{{$item->created_by}}</td>
                            <td>{{$item->updated_by}}</td>
                            <td>
                                <a href='{{url('olahraga/'.$item->nama_katlapangan.'/edit')}}' class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{url('olahraga/'.$item->nama_katlapangan)}}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
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
        