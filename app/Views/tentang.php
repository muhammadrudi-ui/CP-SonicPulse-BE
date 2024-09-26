<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tags -->
    <meta name="title" content="Tentang SonicPulse: Kami dan Misi Kami">
    <meta name="description"
        content="Pelajari lebih lanjut tentang SonicPulse, visi kami, dan komitmen kami untuk memberikan pengalaman audio yang luar biasa.">
    <title>Tentang SonicPulse: Kami dan Misi Kami</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= current_url(); ?>">

    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="id" href="<?= base_url('/id/tentang'); ?>" />
    <link rel="alternate" hreflang="en" href="<?= base_url('/en/about'); ?>" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marope:wght@400;700&display=swap');

        body {
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
        }

        .row {
            margin-right: 0;
            margin-left: 0;
        }

        .col-md-4 {
            padding-left: 0;
            padding-right: 0;
        }

        /* Loader CSS */
        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.8);
            /* Optional: semi-transparent background */
            z-index: 9999;
            /* Make sure loader is on top */
        }

        .loader {
            width: 50px;
            aspect-ratio: 1;
            display: grid;
            border: 4px solid #0000;
            border-radius: 50%;
            border-right-color: #009EF2;
            animation: l15 1s infinite linear;
        }

        .loader::before,
        .loader::after {
            content: "";
            grid-area: 1/1;
            margin: 2px;
            border: inherit;
            border-radius: 50%;
            animation: l15 2s infinite;
        }

        .loader::after {
            margin: 8px;
            animation-duration: 3s;
        }

        @keyframes l15 {
            100% {
                transform: rotate(1turn)
            }
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffff;
            padding: 10px 75px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-item {
            margin-left: 18px;
            position: relative;
        }

        .nav-item a {
            color: #808080;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-item a:hover,
        .nav-item a:focus {
            color: #009EF2;
        }

        .nav-item a.active {
            color: #009EF2;
        }

        .logo {
            width: 115px;
        }

        .rectangle {
            background-color: #F5FAFF;
            padding: 80px;
            width: 100%;
            text-align: center;
        }

        h1 {
            background: linear-gradient(to right, #009EF2, #F32323);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 32px;
            font-weight: 500;
        }

        .tentang-kami h1 {
            font-size: 32px;
            margin-bottom: 40px;
            background: linear-gradient(to right, #009EF2, #F32323);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 500;
        }

        .tentang-kami .headline p {
            font-size: 32px;
            color: #009EF2;
        }

        .tentang-kami .highlight {
            font-weight: bold;
        }

        .tentang-kami p,
        ul {
            font-size: 18px;
            color: #555;
            text-align: justify;
        }

        .tentang-kami img {
            width: 90%;
            border-radius: 8px;
            margin-left: 50px;
        }

        /* Tablet 768px */
        @media (max-width: 768px) {
            .navbar {
                padding: 10px 40px;
            }

            .logo {
                width: 100px;
            }

            .rectangle {
                padding: 60px;
            }

            h1 {
                font-size: 28px;
            }

            .tentang-kami .headline p {
                font-size: 30px;
            }

            .tentang-kami p,
            ul {
                font-size: 18px;
            }

            .tentang-kami img {
                margin-left: 0;
                width: 100%;
            }

            footer {
                font-size: 18px;
            }
        }

        /* Mobile L 425px */
        @media (max-width: 425px) {
            .navbar {
                padding: 10px 20px;
            }

            .logo {
                width: 80px;
            }

            .rectangle {
                padding: 40px;
            }

            h1 {
                font-size: 24px;
            }

            .tentang-kami .headline p {
                font-size: 28px;
                text-align: center;
            }

            .tentang-kami p,
            ul {
                font-size: 16px;
            }

            .tentang-kami .row {
                flex-direction: column-reverse;
            }

            .tentang-kami img {
                width: 100%;
                margin-bottom: 20px;
            }

            footer {
                font-size: 16px;
            }
        }

        /* Mobile M 375px */
        @media (max-width: 425px) {
            .navbar {
                padding: 10px 15px;
            }

            .logo {
                width: 70px;
            }

            .rectangle {
                padding: 30px;
            }

            h1 {
                font-size: 22px;
            }

            .tentang-kami .headline p {
                font-size: 26px;
                text-align: center;
            }

            .tentang-kami p,
            ul {
                font-size: 14px;
            }

            .tentang-kami .row {
                flex-direction: column-reverse;
            }

            .tentang-kami img {
                width: 100%;
                margin-bottom: 20px;
            }

            footer {
                font-size: 14px;
            }
        }

        /* Mobile S 320px */
        @media (max-width: 320px) {
            .navbar {
                padding: 10px 10px;
            }

            .logo {
                width: 60px;
            }

            .rectangle {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            .tentang-kami .headline p {
                font-size: 24px;
                text-align: center;
            }

            .tentang-kami p,
            ul {
                font-size: 12px;
            }

            .tentang-kami .row {
                flex-direction: column-reverse;
            }

            .tentang-kami img {
                width: 100%;
                margin-bottom: 20px;
            }

            footer {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- Loader -->
    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
        <div class="container-fluid">
            <?php foreach ($profils as $logo): ?>
                <a class="navbar-brand" href="#">
                    <img src=" <?= base_url('IMG/' . $logo['logo_perusahaan']); ?>" alt="Logo" class="logo" loading="lazy">
                </a>
            <?php endforeach; ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #009EF2;" href="<?= base_url('tentang'); ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('artikel'); ?>">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('produk'); ?>">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('aktivitas'); ?>">Aktivitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kontak'); ?>">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bahasa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Indonesia</a></li>
                            <li><a class="dropdown-item" href="about">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background -->
    <div class="rectangle">
        <h1>Tentang Kami</h1>
    </div>

    <!-- Tentang Kami -->
    <div class="container tentang-kami mt-5 mb-5">
        <div class="row align-items-center">
            <?php foreach ($profils as $tentang): ?>
                <div class="col-md-6">
                    <div class="headline">
                        <p>
                            <?= $tentang['nama_perusahaan']; ?>
                        </p>
                    </div>
                    <p>
                        <?= $tentang['deskripsi_perusahaan_in']; ?>
                    </p>
                </div>
                <div class="col-md-6">
                    <img src=" <?= base_url('IMG/' . $tentang['foto_utama']); ?>" alt="Image Tentang Kami" class="img-fluid"
                        loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <?php foreach ($profils as $footer): ?>
        <footer>
            <div class="text-center p-3" style="background-color: #555; color:#ffff;"> &copy;
                <?= date('Y'); ?> Copyright:
                <?= $footer['teks_footer']; ?>
        </footer>
    <?php endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <script>
        // Hide loader after page loads
        window.addEventListener('load', function () {
            document.querySelector('.loader-container').style.display = 'none';
        });
    </script>
</body>

</html>