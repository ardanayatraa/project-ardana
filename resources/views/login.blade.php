    @extends('layouts.main')
    @section('content')

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/png" href="{{ asset('/img/fav.png') }}">
            <title>Ngide-Net</title>
            <link rel="stylesheet" href="/assets/css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
                integrity="sha512-7xN6EAgOvWlXDsW7XehwJk0IJmFqXknm0aW1c1Hva/J0u1DZFNXMl9PlKAh7FZzR8ROk5cvWrrbIyIeODlj9Q=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

            <style>
                body {
                    background-color: #f8f9fa;
                }

                .login-container {
                    min-height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0;
                    /* Reset margin to ensure full width */
                }

                .login-wrapper {
                    width: 100%;
                    max-width: 400px;
                    margin: 0 15px;
                    /* Add margin to the wrapper */
                }

                .fade-overlay {

                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }

                .login-card {
                    width: 100%;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    position: relative;
                    z-index: 1;
                }

                .login-card .btn-block {
                    width: 100%;
                }
            </style>
        </head>

        <body>
            <div class="login-container">
                <div class="fade-overlay"></div>
                <div class="login-wrapper">
                    <div class="card login-card">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <img src="/img/logo.jpg" alt="User Icon" width="80" class="img-fluid">
                            </div>
                            <form action="#" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control form-control-lg" id="username"
                                        name="username">
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg" id="pass"
                                        name="password">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                                    <small class="d-block text-center text-success">Ngide.net &copy; 2023</small>
                                    <p class="text-center punya">Belum punya akun? <a href="register"
                                            class="daftar">Daftar</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="assets/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>
        </body>

        </html>
