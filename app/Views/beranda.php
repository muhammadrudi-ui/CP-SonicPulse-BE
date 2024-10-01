<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tags -->
    <meta name="title" content="Beranda | SonicPulse: Selamat Datang di Dunia Audio Berkualitas">
    <meta name="description"
        content="Temukan pengalaman audio terbaik dengan SonicPulse. Nikmati berbagai produk audio berkualitas tinggi yang dirancang untuk memuaskan telinga Anda.">
    <title>Beranda | SonicPulse:Selamat Datang di Dunia Audio Berkualitas"</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= current_url(); ?>">

    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="id" href="<?= base_url('/id/beranda'); ?>" />
    <link rel="alternate" hreflang="en" href="<?= base_url('/en/home'); ?>" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marope:wght@400;700&display=swap');

        body {
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
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

        .carousel-item img {
            width: 100%;
            height: 632px;
            object-fit: cover;
        }

        .carousel {
            max-width: 100%;
            margin: 0 auto;
        }

        .logo-sonic {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;
        }

        .image-logo {
            max-width: 20%;
            /* Agar gambar tidak melebihi ukuran kontainernya */
            height: auto;
        }

        .tentang-kami {
            width: 100%;
            height: auto;
            /* Ubah agar tinggi mengikuti konten */
            padding-bottom: 50px;
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
            font-size: 28px;
            font-weight: bold;
            color: #000;
            margin-right: 60px;
            margin-left: 6px;
        }

        .tentang-kami p {
            font-size: 18px;
            color: #555;
            text-align: justify;
            margin-right: 60px;
            margin-left: 6px;
            display: -webkit-box;
            -webkit-line-clamp: 12;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .tentang-kami img {
            width: 80%;
            border-radius: 8px;
        }

        .stacked-images-container {
            display: flex;
            justify-content: center;
            /* Posisikan gambar di tengah */
            align-items: center;
            width: 100%;
        }

        .baca-selengkapnya {
            display: inline-block;
            padding: 8px 18px;
            font-size: 18px;
            color: #009EF2;
            background-color: #ffffff;
            border: 2px solid #009EF2;
            border-radius: 18px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .baca-selengkapnya:hover {
            background-color: #009EF2;
            color: #ffffff;
        }


        .produk-kami {
            padding: 60px 0;
        }

        .produk-kami h1 {
            font-size: 32px;
            margin-bottom: 60px;
            background: linear-gradient(to right, #009EF2, #F32323);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 500;
        }

        .produk-kami .cards-container {
            display: flex;
            justify-content: space-evenly;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            width: 18rem;
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            /* Memastikan konten di dalam kartu dimulai dari atas */
            overflow: hidden;
            /* Menyembunyikan konten yang meluap dari kartu */
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

        .card-title {
            color: #009EF2;
        }

        .card-text {
            color: #555;
        }

        .card-title,
        .card-text {
            white-space: nowrap;
            /* Tidak membungkus teks ke baris baru */
            overflow: hidden;
            /* Menyembunyikan teks yang meluap */
            text-overflow: ellipsis;
            /* Menampilkan elipsis untuk teks yang meluap */
        }

        .card:hover {
            background-color: #009EF2;
            color: #ffffff;
        }

        .card:hover .card-title,
        .card:hover .card-text {
            color: #ffffff;
        }

        .kontak-kami {
            padding: 60px 0;
        }

        .kontak-kami h1 {
            font-size: 32px;
            margin-bottom: 60px;
            background: linear-gradient(to right, #009EF2, #F32323);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 500;
        }

        .kontak-kami p {
            font-size: 18px;
            color: #555;
            text-align: justify;
        }

        .map-container {
            width: 100%;
            height: 520px;
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 18px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        .kontak-kami h3 {
            margin-top: 12px;
            margin-bottom: 40px;
            color: #009EF2;
        }

        .image-row {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .image-row img {
            width: 180px;
            border: 2px solid #ddd;
            border-radius: 8px;
        }

        .form-group {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        .form-control:focus {
            border-color: #aaa;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        /* Tablet 768px */
        @media (max-width: 768px) {
            .navbar {
                padding: 10px 40px;
            }

            .logo {
                width: 100px;
            }

            .logo-sonic {
                height: 25vh;
            }

            .carousel-item img {
                height: 400px;
            }

            .tentang-kami h1,
            .kontak-kami h1,
            .produk-kami h1 {
                font-size: 28px;
                margin-bottom: 30px;
            }

            .tentang-kami p {
                font-size: 18px;
            }

            .baca-selengkapnya {
                font-size: 18px;
            }

            .produk-kami .cards-container {
                display: flex;
                justify-content: space-evenly;
                align-items: flex-start;
                flex-wrap: wrap;
                margin-top: 40px;
            }

            .card img {
                height: 220px;
            }

            .kontak-kami {
                padding: 50px 0;
            }

            .kontak-kami p {
                font-size: 18px;
                text-align: center;
            }

            .kontak-kami h3 {
                margin-bottom: 50px;
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

            .logo-sonic {
                height: 20vh;
            }

            .carousel-item img {
                height: 350px;
            }

            .tentang-kami h1,
            .kontak-kami h1,
            .produk-kami h1 {
                font-size: 26px;
                margin-bottom: 30px;
            }

            .tentang-kami img {
                margin-bottom: 20px;
                /* Beri jarak bawah agar tidak terlalu rapat dengan teks */
                width: 100%;
                /* Pastikan gambar tetap proporsional */
            }

            .tentang-kami p {
                font-size: 16px;
                margin-right: 0;
                /* Hilangkan margin kanan */
                margin-left: 0;
                /* Hilangkan margin kiri */
            }

            .baca-selengkapnya {
                font-size: 16px;
            }

            .produk-kami {
                padding: 50px 0;
            }

            .produk-kami .cards-container {
                display: flex;
                justify-content: space-evenly;
                align-items: flex-start;
                flex-wrap: wrap;
                margin-top: 40px;
            }

            .card img {
                height: 280px;
            }

            .kontak-kami {
                padding: 40px 0;
            }

            .kontak-kami p {
                font-size: 16px;
                text-align: center;
            }

            .kontak-kami h3 {
                margin-bottom: 40px;
            }

            .map-container {
                height: 300px;
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

            .logo-sonic {
                height: 15vh;
            }

            .carousel-item img {
                height: 300px;
            }

            .tentang-kami h1,
            .kontak-kami h1,
            .produk-kami h1 {
                font-size: 24px;
                margin-bottom: 30px;
            }

            .tentang-kami img {
                margin-bottom: 20px;
                /* Beri jarak bawah agar tidak terlalu rapat dengan teks */
                width: 100%;
                /* Pastikan gambar tetap proporsional */
            }

            .tentang-kami p {
                font-size: 14px;
                margin-right: 0;
                /* Hilangkan margin kanan */
                margin-left: 0;
                /* Hilangkan margin kiri */
            }

            .baca-selengkapnya {
                font-size: 14px;
            }

            .produk-kami {
                padding: 40px 0;
            }

            .produk-kami .cards-container {
                display: flex;
                justify-content: space-evenly;
                align-items: flex-start;
                flex-wrap: wrap;
                margin-top: 40px;
            }

            .card img {
                height: 240px;
            }

            .kontak-kami {
                padding: 30px 0;
            }

            .kontak-kami p {
                font-size: 14px;
                text-align: center;
            }

            .kontak-kami h3 {
                margin-bottom: 30px;
            }

            .map-container {
                height: 300px;
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

            .logo-sonic {
                height: 10vh;
            }

            .carousel-item img {
                height: 300px;
            }

            .tentang-kami h1,
            .kontak-kami h1,
            .produk-kami h1 {
                font-size: 22px;
                margin-bottom: 30px;
            }

            .tentang-kami img {
                margin-bottom: 20px;
                /* Beri jarak bawah agar tidak terlalu rapat dengan teks */
                width: 100%;
                /* Pastikan gambar tetap proporsional */
            }

            .tentang-kami p {
                font-size: 12px;
                margin-right: 0;
                /* Hilangkan margin kanan */
                margin-left: 0;
                /* Hilangkan margin kiri */
            }

            .baca-selengkapnya {
                font-size: 12px;
            }

            .produk-kami {
                padding: 30px 0;
            }

            .produk-kami .cards-container {
                display: flex;
                justify-content: space-evenly;
                align-items: flex-start;
                flex-wrap: wrap;
                margin-top: 40px;
            }

            .card img {
                height: 200px;
            }

            .kontak-kami {
                padding: 20px 0;
            }

            .kontak-kami p {
                font-size: 12px;
                text-align: center;
            }

            .kontak-kami h3 {
                margin-bottom: 20px;
            }

            .map-container {
                height: 300px;
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
                    <img src="<?= base_url('IMG/' . $logo['logo_perusahaan']); ?>" alt="Logo SonicPulse" class="logo"
                        loading="lazy">
                </a>
            <?php endforeach; ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color: #009EF2;" href="<?= base_url('/id'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/id/tentang'); ?>">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/id/artikel'); ?>">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/id/produk'); ?>">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/id/aktivitas'); ?>">Aktivitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/id/kontak'); ?>">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Bahasa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Indonesia</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/en/home'); ?>">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slider Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if (!empty($sliders)): ?>
                <?php foreach ($sliders as $key => $slider): ?>
                    <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                        <img src="<?= base_url('IMG/' . $slider['file_foto_slider']); ?>" class="d-block w-100"
                            alt="Slide <?= $key + 1 ?>" loading="lazy">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="carousel-item active">
                    <img src="<?= base_url('IMG/default.jpg'); ?>" class="d-block w-100" alt="Default Slide Corousel"
                        loading="lazy">
                </div>
            <?php endif; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Berikutnya</span>
        </button>
    </div>


    <!-- Logo -->
    <?php foreach ($profils as $logo): ?>
        <div class="logo-sonic">
            <img src="<?= base_url('IMG/' . $logo['logo_perusahaan']); ?>" alt="Logo SonicPulse" class="image-logo"
                loading="lazy">
        </div>
    <?php endforeach; ?>


    <!-- Tentang Kami -->
    <div class="container-fluid tentang-kami" style="background-color: #F5FAFF;">
        <?php foreach ($profils as $about): ?>
            <h1 class="text-center mt-5 pt-5">Tentang Kami</h1>
            <div class="row align-items-center mt-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="stacked-images-container">
                        <img src=" <?= base_url('IMG/' . $about['foto_utama']); ?>" alt="Image Utama Tentang Kami"
                            class="img-fluid first" loading="lazy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="headline">
                        <p>
                            <?= $about['nama_perusahaan']; ?>
                        </p>
                    </div>
                    <p>
                        <?= $about['deskripsi_perusahaan_in']; ?>
                    </p>
                    <div class="text">
                        <a href="/id/tentang" class="btn baca-selengkapnya">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Produk Kami -->
    <div class="container-fluid produk-kami" ;>
        <h1 class="text-center mt-5">Produk Kami</h1>
        <div class="cards-container">

            <?php foreach ($produks as $p): ?>
                <a href="<?= base_url('/id/produk/' . $p['id_produk']); ?>" style="text-decoration: none; color: #009EF2;">
                    <div class="card">
                        <img src="<?= base_url('IMG/' . $p['foto_produk']); ?>" class="card-img-top"
                            alt="Image Produk SonicPulse" loading="lazy">
                        <div class="card-body">
                            <h4 class="card-title"><?= $p['nama_produk_in']; ?></h4>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Aktivitas Kami -->
    <div class="container-fluid produk-kami" style="background-color: #F5FAFF;">
        <h1 class="text-center">Aktivitas Kami</h1>
        <div class="cards-container">

            <?php foreach ($aktivitass as $aktiv): ?>
                <a href="<?= base_url('/id/aktivitas/' . $aktiv['id_aktivitas']); ?>"
                    style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="<?= base_url('IMG/' . $aktiv['foto_aktivitas']); ?>" class="card-img-top"
                            alt="Image Aktivitas SonicPulse" loading="lazy">
                        <div class="card-body">
                            <h4 class="card-title"><?= $aktiv['nama_aktivitas_in']; ?></h4>
                            <p class="card-text"><?= $aktiv['deskripsi_aktivitas_in']; ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    </div>

    <!-- Kontak Kami -->
    <div class="container kontak-kami">
        <h1 class="text-center">Kontak Kami</h1>
        <?php foreach ($profils as $p): ?>
            <div class="map-container">
                <iframe
                    src="<?= $p['link_maps']; ?>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.7154260405!2d106.68943071640627!3d-6.229386734889665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e4c63ab555%3A0xb56e1f64ffb010b!2sManchester!5e0!3m2!1sen!2sid!4v1687355172765!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="container kontak-kami text-center">
                <h3>Hubungi Kami disini</h3>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" value="<?= $p['alamat']; ?>" readonly class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="no_hp">Telepon:</label>
                            <input type="tel" id="no_hp" value="<?= $p['no_hp']; ?>" readonly class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" value="<?= $p['email']; ?>" readonly class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Footer -->
    <?php foreach ($profils as $footer): ?>
        <footer>
            <div class="text-center p-3" style="background-color: #555; color:#ffff;"> &copy; <?= date('Y'); ?> Copyright:
                <?= $footer['teks_footer']; ?>
        </footer>
    <?php endforeach; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

    <script>
        // Hide loader after page loads
        window.addEventListener('load', function () {
            document.querySelector('.loader-container').style.display = 'none';
        });
    </script>

    <script>
        // Hide loader after page loads
        window.addEventListener('load', function () {
            document.querySelector('.loader-container').style.display = 'none';
        });
    </script>
</body>

</html>