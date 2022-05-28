@extends('admin.layouts.app')
@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 mt-5">
    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                <h4 class="card-title">Rules</h4>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" cellspacing="0" id="table">
                <thead>
                    <tr>
                    <th width="5%">ID</th>
                    <th>Nama Produk</th>
                    <th>Indikator</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produk as $p)
                    <tr>
                        <td align="center">{{ $p->id }}</td>
                        <td>{{ $p->nama_produk }}</td>
                        <td>
                            <ul>
                                @foreach($p->indikators as $indikator)
                                    <li>{{ $indikator->nama_indikator }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td><img src="{{ asset('images/'.$p->gambar) }}" alt="" width="125"></td>                           
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