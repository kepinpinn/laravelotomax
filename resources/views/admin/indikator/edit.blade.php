@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
    <form action="{{ route('admin.indikator.update', ['id' => $indikator->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Nama Indikator</label>
                <input required type="text" class="form-control" name="nama_indikator" value="{{ $indikator->nama_indikator }}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Pertanyaan</label>
                <select name="pertanyaan" class="form-control" id="">
                    @foreach($kelompokindikator as $pertanyaan)
                        <option value="{{ $pertanyaan->id }}">{{ $pertanyaan->pertanyaan }}</option>
                    @endforeach
                </select>
            </div>
        <div class="text-right" >
            <button type="submit" class="btn btn-success text-right">Simpan</button>
        </div>
    </form>
</div>
@endsection