<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ngide-Net</title>
    <link rel="stylesheet" href="/assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    @if (Auth::check())
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top fixed-navbar">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="{{ url('/') }}">Ngide.net</a>
            </div>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle  bg-transparent border-dark" type="button"
                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">

                    <img src="/img/avatar.jpg" alt="Avatar" class="avatar-image">
                    <span class="ms-2 text-light">{{ '' }}</span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">

                    <!-- Menu Profil -->
                    <li>
                        <a class="dropdown-item" href="#" style="background-color: transparent;">
                            <i style="margin-right: 5px;"></i> Rincian Profil
                        </a>
                    </li>

                    <!-- Menu Logout -->
                    <li><a class="dropdown-item" href="/logout" style="background-color: transparent;">Logout</a></li>
                </ul>
            </div>


        </nav>
    @endif
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>


</html>
