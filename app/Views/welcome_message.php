<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline Navbar</title>
    <link rel="stylesheet" href="path/to/bootstrap.css">
    <link rel="stylesheet" href="path/to/custom.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marope:wght@400;700&display=swap');

        body {
            font-family: 'Marope', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffff;
            padding: 20px 80px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand a {
            color: #000;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-item {
            margin-left: 32px;
            position: relative; /* Membantu penempatan dropdown */
        }

        .nav-item a {
            color: #808080;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        .nav-item a:hover,
        .nav-item a:focus {
            color: #009EF2; /* Warna saat dihover atau diklik */
        }

        .nav-item a.active {
            color: #009EF2; /* Warna saat item aktif */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            list-style: none;
            padding: 0;
            margin: 0;
            width: 120px;
        }

        .dropdown-content li {
            padding: 10px;
            text-align: center;
        }

        .dropdown-content li a {
            color: #808080;
            text-decoration: none;
            font-size: 14px;
            display: block;
        }

        .dropdown-content li a:hover {
            color: #009EF2; /* Warna saat dihover */
        }

        .nav-item:hover .dropdown-content {
            display: block;
        }

        .logo {
            width: 88px;
        }

        .carousel-item img {
            width: 100%;
            height: 630px;
            object-fit: cover;
        }

        .carousel {
            max-width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="#"><img src="IMG/Logo.png" class="logo" alt="Brand Logo"></a>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="#">Beranda</a></li>
            <li class="nav-item"><a href="#">Tentang</a></li>
            <li class="nav-item"><a href="#">Artikel</a></li>
            <li class="nav-item"><a href="#">Produk</a></li>
            <li class="nav-item"><a href="#">Aktivitas</a></li>
            <li class="nav-item"><a href="#">Kontak</a></li>
            <li class="nav-item">
                <a href="#">Bahasa</a>
                <ul class="dropdown-content">
                    <li><a href="#">Indonesia</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Slider Corousel -->
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMG/S1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="IMG/S2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="IMG/S3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
