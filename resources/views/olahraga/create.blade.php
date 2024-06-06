@extends('layout.template')
   <!-- START FORM -->
@section('konten')   <!--untuk membuat template bootsrapt-->
@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </div>
</div>
    
@endif
    <form action='{{ url('olahraga') }}' method='post' enctype="multipart/form-data">
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{url('olahraga')}}'class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="nama_katlapangan" class="col-sm-2 col-form-label">Nama Kategori Lapangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_katlapangan' value="{{Session::get('nama_katlapangan')}}" id="nama_katlapangan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga_katlapangan" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='harga_katlapangan' value="{{Session::get('harga_katlapangan')}}" id="harga_katlapangan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="file_katlapangan" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='file_katlapangan' id="file_katlapangan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah_lapangan" class="col-sm-2 col-form-label">Jumlah Lapangan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='jumlah_lapangan'value="{{Session::get('jumlah_katlapangan')}}" id="jumlah_lapangan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="created_by" class="col-sm-2 col-form-label">Dibuat Oleh</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='created_by' value="{{Session::get('created_by')}}" id="created_by">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="updated_by" class="col-sm-2 col-form-label">Diperbarui Oleh</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='updated_by' value="{{Session::get('updated_by')}}" id="updated_by">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="submit" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
           
   @endsection   <!--untuk membuat template bootsrapt-->
     