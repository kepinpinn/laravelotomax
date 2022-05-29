@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 mb-5">
    <h4 class="card-title">Edit Data Produk</h4>
    <form action="{{ route('admin.produk.update', ['id' => $produk->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Nama</label>
                <input required type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="harga">Harga</label>
                <input required type="text" class="form-control" name="harga_produk" value="{{ $produk->harga_produk }}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi_produk" class="form-control" id="deskripsi_produk" cols="30" rows="5">
                    {{ $produk->deskripsi_produk }}
                </textarea>
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="merk">Merk</label>
                <select name="merk" class="form-control" id="merk">
                    @foreach($merk as $m)
                        <option value="{{ $m->id }}">{{ $m->merek }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="tipe">Link</label>
                <input required type="text" class="form-control" name="link" value="{{ $produk->link }}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="indikator">Indikator</label> <br/>
                @foreach($indikator as $indikator)
                    <input type="checkbox" name="indikator[]" value="{{ $indikator->id }}"
                    @php
                        foreach($produk->indikators as $i){
                            if($i->id == $indikator->id){
                                echo "checked";
                            }
                        }
                    @endphp
                    >{{ " ".$indikator->nama_indikator }} <br/>
                @endforeach
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Gambar</label>
                <input type="file" class="form-control" name="gambar_produk">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="promo">Promo</label>
                <select name="promo" class="form-control" id="promo">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
        <div class="text-right" >
            <button type="submit" class="btn btn-success text-right">Simpan</button>
        </div>
    </form>
</div>
@endsection