<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('/img/fav.png') }}">
    <title>Ngide-Net</title>
    <link rel="stylesheet" href="/assets/dist/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-7xN6EAgOvWlXDsW7XehwJk0IJmFqXknm0aW1c1Hva/J0u1DZFNXMl9PlKAh7FZzR8ROk5cvWrrbIyIeODlj9Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="login-container">
        <div class="fade-overlay">
            <div class="card login-card">
                <div class="card-body">
                    <div class="text-center mb-4 mt-3">
                        <img src="/img/logo.jpg" alt="User Icon" width="80">
                    </div>
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Password:</label>
                            <input type="password" class="form-control form-control-lg" id="pass" name="password">
                        </div>
                        <div class="d-grid gap-1">
                            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                            <small class=" text-sm-center mt-3 mb-2 text-success">Ngide.net &copy; 2023</small>
                            <a href="#" class="already">Belum punya akun ? Daftar.</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="assets/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>
