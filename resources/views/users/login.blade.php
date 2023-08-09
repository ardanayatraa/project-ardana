    @extends('layouts.main')
    @section('content')
        <div class="login-container">
            <div class="fade-overlay"></div>
            <div class="login-wrapper">
                <div class="card login-card">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="/img/logo.jpg" alt="User Icon" width="80" class="img-fluid">
                        </div>
                        <form action="/" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control form-control-lg" id="username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control form-control-lg" id="pass" name="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                                <small class="d-block text-center text-success">Ngide.net &copy; 2023</small>
                                <p class="text-center punya">Belum punya akun? <a href="register" class="daftar">Daftar</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
