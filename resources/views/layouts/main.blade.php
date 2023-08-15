<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ngide.net | </title>
    <!-- Link ke Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke Font Awesome CSS untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body>
    @if (Auth::check())
        <!-- Navbar Atas -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-navbar">
            <div class="container d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="/">Ngide.net</a>
                <div class="dropdown ml-5">
                    <button class="btn btn-secondary dropdown-toggle bg-transparent border-dark" type="button"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/img/avatar.jpg" alt="Avatar" class="avatar-image">
                        <span class="ms-2 text-light">{{ Auth::user()->nama_lengkap }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <!-- Menu Profil -->
                        <li>
                            <a class="dropdown-item" href="#" style="background-color: transparent;">
                                <i style="margin-right: 5px;" class="fas fa-user"></i> Rincian Profil
                            </a>
                        </li>
                        <!-- Menu Logout -->
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                style="background-color: transparent;">
                                <i style="margin-right: 5px;" class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <div class="sidebar">
            @can('admin')
                <a href="{{ route('userlist') }}"><i class="fas fa-layer-group"></i> User List</a>
            @endcan
            <a href="{{ route('postlist') }}"><i class="fas fa-link"></i> Manage Post</a>
            @can('admin')
                <a href="{{ route('allpost') }}"><i class="fas fa-thumbtack"></i> All Post by Tamu</a>
            @endcan
        </div>

        <!-- Konten Utama -->
        <div class="main-content">
    @endif
    @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
