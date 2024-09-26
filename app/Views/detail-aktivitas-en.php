<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Aktivitas - SonicPulse</title>
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

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 30px;
        }

        .activity-title {
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .main-image {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 500px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .activity-content {
            text-align: justify;
            font-size: 18px;
            line-height: 1.6;
            color: #555;
        }

        .card {
            max-width: 330px;
            margin: 0 auto;
            margin-top: 23px;
            margin-bottom: 23px;
            border: 2px solid #009EF2;
            border-radius: 18px;
        }

        .card img {
            margin: 10px auto;
            /* Menambahkan ruang di sekitar gambar */
            background: #fff;
            width: 92%;
            height: 280px;
            border-radius: 14px;
            /* Opsional: membuat sudut gambar lebih lembut */
        }

        .card-img-top {
            width: 100%;
            /* Mengatur lebar gambar sesuai dengan lebar card */
            object-fit: cover;
            /* Memastikan gambar tidak terdistorsi dan mengisi area dengan baik */
            border-radius: 14px;
            /* Opsional: membuat sudut gambar lebih lembut */
        }

        .card-text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;

            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            /* Memungkinkan teks membungkus */
            text-align: justify;
            color: #555;
        }

        .card-title {
            color: #009EF2;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card:hover {
            background-color: #009EF2;
            color: #ffffff;
        }

        .card:hover .card-title,
        .card:hover .card-text {
            color: #ffffff;
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

            .activity-title {
                font-size: 24px;
            }

            .main-image {
                max-height: 300px;
            }

            .activity-content {
                font-size: 18px;
            }

            .card {
                max-width: 85%;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            .card img {
                height: 150px;
            }

            .card-title {
                font-size: 20px;
                font-weight: 550;
            }

            .card-text {
                -webkit-line-clamp: 3;
                font-size: 18px;
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

            .activity-title {
                font-size: 20px;
            }

            .main-image {
                max-height: 300px;
            }

            .activity-content {
                font-size: 16px;
            }

            .card {
                max-width: 80%;
                margin-top: 18px;
                margin-bottom: 18px;
            }

            .card img {
                height: 260px;
            }

            .card-title {
                font-size: 18px;
                font-weight: 550;
            }

            .card-text {
                -webkit-line-clamp: 2;
                font-size: 16px;
            }

            footer {
                font-size: 16px;
            }
        }

        /* Mobile M 375px */
        @media (max-width: 375px) {
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

            .activity-title {
                font-size: 18px;
            }

            .main-image {
                max-height: 300px;
            }

            .activity-content {
                font-size: 14px;
            }

            .card {
                max-width: 75%;
                margin-top: 16px;
                margin-bottom: 16px;
            }

            .card img {
                height: 220px;
            }

            .card-title {
                font-size: 16px;
                font-weight: 550;
            }

            .card-text {
                -webkit-line-clamp: 2;
                font-size: 14px;
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

            .activity-title {
                font-size: 16px;
            }

            .main-image {
                max-height: 300px;
            }

            .activity-content {
                font-size: 12px;
            }

            .card {
                max-width: 70%;
                margin-top: 14px;
                margin-bottom: 14px;
            }

            .card img {
                height: 180px;
            }

            .card-title {
                font-size: 14px;
                font-weight: 550;
            }

            .card-text {
                -webkit-line-clamp: 2;
                font-size: 12px;
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
                    <img src="<?= base_url('IMG/' . $logo['logo_perusahaan']); ?>" alt="Logo" class="logo" loading="lazy">
                </a>
            <?php endforeach; ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('article'); ?>">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('product'); ?>">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #009EF2;" href="<?= base_url('activity'); ?>">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="/aktivitas/<?= $aktivitas['id_aktivitas'] ?>">Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background -->
    <div class="rectangle">
        <h1>Activity Details</h1>
    </div>

    <div class="container">
        <!-- Judul Aktivitas -->
        <div class="activity-title"><?= $aktivitas['nama_aktivitas_en']; ?></div>

        <!-- Gambar Utama -->
        <img src="<?= base_url('IMG/' . $aktivitas['foto_aktivitas']); ?>" class="main-image" alt="Main Activity Image"
            loading="lazy">

        <!-- Isi Aktivitas -->
        <div class="activity-content">
            <p><?= $aktivitas['deskripsi_aktivitas_en']; ?></p>
        </div>

    </div>

    <!-- Garis Pemisah -->
    <hr class="my-4">

    <!-- Related Produk Section -->
    <div class="related-products text-center">
        <h3 style="color: #009EF2;">Related Activities</h3>
    </div>

    <!-- card aktivitas -->
    <div class="container mt-2 mb-2">
        <div class="row">

            <?php foreach ($aktivitasTerkait as $aktivitas): ?>
                <div class="col-md-4">
                    <a href="<?= base_url('activity/' . $aktivitas['id_aktivitas']); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="card">
                            <img src="<?= base_url('IMG/' . $aktivitas['foto_aktivitas']); ?>" class="card-img-top"
                                alt="<?= $aktivitas['nama_aktivitas_in']; ?>" loading="lazy">
                            <div class="card-body">
                                <h3 class="card-title"><?= $aktivitas['nama_aktivitas_en']; ?></h3>
                                <p class="card-text">
                                    <?= $aktivitas['deskripsi_aktivitas_en']; ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Footer -->
    <?php foreach ($profils as $footer): ?>
        <footer>
            <div class="text-center p-3" style="background-color: #555; color:#ffff;"> &copy; <?= date('Y'); ?> Copyright:
                <?= $footer['teks_footer']; ?>
        </footer>
    <?php endforeach; ?>

    <!-- Script -->
    <!-- Dropdown Nav -->
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