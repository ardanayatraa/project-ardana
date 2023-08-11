@extends('layouts.main')
@section('content')
    <div class="login-container">
        <div class="fade-overlay">
            <div class="card login-card">
                <div class="card-body">
                    <div class="text-center mb-4 mt-3">
                        <img src="/img/logo.jpg" alt="User Icon" width="80">
                    </div>
                    <form action="/user/{{ $user->id }}/update" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input value="{{ $user->nama_lengkap }}" type="text" class="form-control form-control-lg"
                                id="nama_lengkap" name="nama_lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-Mail</label>
                            <input value="{{ $user->email }}" type="email" class="form-control form-control-lg"
                                id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input value="{{ $user->username }}" type="text" class="form-control form-control-lg"
                                id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <input value="{{ $user->address }}" type="text" class="form-control form-control-lg"
                                id="address" name="address">
                        </div>
                        <div class="d-grid gap-1">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
