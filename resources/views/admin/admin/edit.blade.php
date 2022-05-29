@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">
    <h4 class="card-title">Edit Data Admin</h4>
    <form action="{{ route('admin.merk.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Nama</label>
                <input required type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="email">Email</label>
                <input required type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="password">Password</label>
                <input required type="password" class="form-control" name="password">
            </div>
        <div class="text-right" >
            <button type="submit" class="btn btn-success text-right">Simpan</button>
        </div>
    </form>
</div>
@endsection