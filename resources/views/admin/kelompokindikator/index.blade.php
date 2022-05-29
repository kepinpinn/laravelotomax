@extends('admin.layouts.app')
@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
    <div class="row">
        <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                <div class="col-10">
                <h4 class="card-title">Data Kelompok Indikator</h4>
                </div>
                <div class="col-2">
                <a href="{{ route('admin.kelompokindikator.tambah') }}" class="btn btn-primary">Tambah</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" cellspacing="0" id="table">
                <thead>
                    <tr>
                    <th width="5%">ID</th>
                    <th>Pertanyaan</th>
                    <th width="15%">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelompokindikator as $i)
                    <tr>
                        <td align="center">{{ $i->id }}</td>
                        <td>{{ $i->pertanyaan }}</td>
                        <td align="center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.kelompokindikator.edit', ['id' => $i->id]) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="{{ route('admin.kelompokindikator.hapus', ['id' => $i->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
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
            {{ $kelompokindikator->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</div>    
@endsection