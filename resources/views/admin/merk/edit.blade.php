@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
    <h4 class="card-title"> Edit Data Merk</h4>
    <form action="{{ route('admin.merk.update', ['id' => $merk->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Nama</label>
                <input required type="text" class="form-control" name="nama" value="{{ $merk->merek }}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Gambar</label>
                <input type="file" class="form-control" name="foto_merek">
            </div>
        <div class="text-right" >
            <button type="submit" class="btn btn-success text-right">Simpan</button>
        </div>
    </form>
</div>
@endsection