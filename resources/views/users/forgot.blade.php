@extends('layouts.main')
@section('content')
    <i class="bi bi-sign-stop"></i>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="card p-4" style="width: 500px;">
            <h2 class="mb-4 text-center">Lupa Password</h2>
            <form action="#" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Kirim Tautan Reset Password</button>
                <button type="submit" class="btn btn-warning btn-block">Batal</button>
            </form>
        </div>
    </div>
@endsection
