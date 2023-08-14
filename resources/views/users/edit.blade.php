@extends('layouts.main')
@section('content')
    <form action="/user/{{ $user->id }}/update" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $user->nama_lengkap }}">

        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
        </div>

        <button type="submit" class="btn btn-dark ">Update</button>
        <a href="{{ route('userlist') }}" class="btn btn-danger">Batal</a>



    </form>
@endsection
