<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar dan Navbar Kombinasi</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke Font Awesome CSS untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Gaya kustom untuk sidebar */
        .sidebar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 250px;
            height: calc(100vh - 60px);
            /* Mengatur tinggi agar tidak tumpang tindih dengan navbar atas */
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            z-index: 1;
            /* Menempatkan sidebar di lapisan bawah */
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #2c3136;
        }

        /* Gaya kustom untuk navbar atas */
        .fixed-navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            /* Mengelevasikan navbar atas di atas sidebar */
        }

        .avatar-image {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }

        .main-content {
            margin-left: 250px;
            margin-top: 60px;
            padding: 20px;
            z-index: 0;
            /* Menempatkan konten utama di lapisan atas */
        }
    </style>
</head>

<body>
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
                            <i style="margin-right: 5px;"></i> Rincian Profil
                        </a>
                    </li>
                    <!-- Menu Logout -->
                    <li><a class="dropdown-item" href="/logout" style="background-color: transparent;">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#"><i class="fas fa-home"></i> Beranda</a>
        <a href="#"><i class="fas fa-chart-bar"></i> Statistik</a>
        <a href="#"><i class="fas fa-cube"></i> Produk</a>
        <a href="#"><i class="fas fa-shopping-cart"></i> Pesanan</a>
        <a href="#"><i class="fas fa-cog"></i> Pengaturan</a>
    </div>

    <!-- Konten Utama -->
    <div class="main-content">
        <h1>Konten Utama</h1>
        <p>Selamat datang di kombinasi sidebar dan navbar atas!</p>
    </div>

    <!-- Link ke Bootstrap JS dan Popper.js (dibutuhkan oleh Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
