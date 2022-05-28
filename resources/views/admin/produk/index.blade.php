@extends('admin.layouts.app')
@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 mt-5">
    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                <h4 class="card-title">Data Produk</h4>
                </div>
                <div class="col text-right">
                <a href="{{ route('admin.produk.tambah') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" cellspacing="0" id="table">
                <thead>
                    <tr>
                    <th width="5%">ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Merk</th>
                    <th>Link</th>
                    <th>Indikator</th>
                    <th>Gambar</th>
                    <th>Promo</th>
                    <th width="15%">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produk as $p)
                    <tr>
                        <td align="center">{{ $p->id }}</td>
                        <td>{{ $p->nama_produk }}</td>
                        <td>{{ $p->harga_produk }}</td>
                        <td>{{ $p->deskripsi_produk }}</td>
                        <td>{{ $p->merks->merek }}</td>
                        <td>{{ $p->link }}</td>
                        <td>
                            <ul>
                                @foreach($p->indikators as $indikator)
                                    <li>{{ $indikator->nama_indikator }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td><img src="{{ asset('images/'.$p->gambar_produk) }}" alt="" width="125"></td>
                        <td>{{ $p->promo }}</td>
                        <td align="center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.produk.edit', ['id' => $p->id]) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="{{ route('admin.produk.hapus', ['id' => $p->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                            </a>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
            <div class="text-center">
            {{ $produk->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>    
@endsection