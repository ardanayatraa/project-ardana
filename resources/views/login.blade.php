    @extends('layouts.main')
@section('content')

    <div class="login-container">
        <div class="fade-overlay">
            <div class="card login-card">
                <div class="card-body">
                    <div class="text-center mb-4 mt-3">
                        <img src="/img/logo.jpg" alt="User Icon" width="80">
                    </div>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-lg" id="pass" name="password">
                        </div>
                        <div class="d-grid gap-1">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                            <small class="text-sm-center mt-3 mb-2 text-success">Ngide.net &copy; 2023</small>
                            <p class="punya text-center">Belum punya akun? <a href="register" class="daftar">Daftar</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection