@extends('layouts.main')
@section('content')
    <div class="login-container">
        <div class="fade-overlay">
            <div class="card login-card">
                <div class="card-body">
                    <div class="text-center mb-4 mt-3">
                        <img src="/img/logo.jpg" alt="User Icon" width="80">
                    </div>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-lg" id="nama_lengkap"
                                name="nama_lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-Mail</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat</label>
                            <br>
                            <textarea name="address" id="address" cols="60" rows="2"></textarea>
                        </div>
                        <div class="d-grid gap-1">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Daftar</button>
                            <small class="text-sm-center mt-3 mb-2 text-success">Ngide.net &copy; 2023</small>
                            <p class="punya text-center">Sudah punya ak un? <a href="/" class="daftar">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
