@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 mt-5">
    <form action="{{ route('admin.indikator.simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Indikator</label>
                <input required type="text" class="form-control" name="indikator">
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