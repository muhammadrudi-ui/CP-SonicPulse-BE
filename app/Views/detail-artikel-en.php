<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tags -->
    <meta name="title"
        content="<?= isset($artikel['judul_artikel']) ? $artikel['judul_artikel'] : 'Article Details' ?>">
    <meta name="description"
        content="Get in-depth insights and information about audio through our latest and most relevant articles.">
    <title>
        <?= isset($artikel['judul_artikel']) ? $artikel['judul_artikel'] . ' | SonicPulse' : 'Article Details | SonicPulse' ?>
    </title>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= current_url(); ?>">

    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="en" href="<?= base_url('/en/article/' . $artikel['id_artikel']); ?>" />
    <link rel="alternate" hreflang="id" href="<?= base_url('/id/artikel/' . $artikel['id_artikel']); ?>" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Marope:wght@400;700&display=swap" rel="stylesheet">

    <style>
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
            z-index: 9999;
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
            border-radius: 12px
        }

        h1 {
            background: linear-gradient(to right, #009EF2, #F32323);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 32px;
            font-weight: 500;
        }

        .img-fluid {
            width: 1000px;
            height: 380px;
            border-radius: 12px;
            object-fit: cover;
            margin: 0 auto;
        }

        .card-text {
            font-size: 18px;
            text-align: justify;
            color: #555;
        }

        .text {
            color: #555;
            font-size: 18px;
        }

        .recommendation-section {
            border: none;
            padding: 8px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 22px;
        }

        .recommendation-card {
            display: flex;
            align-items: center;
            margin-bottom: 22px;
            border-radius: 8px;
        }

        .recommendation-image {
            width: 140px;
            height: 100px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 12px;
            object-position: center;
            flex-shrink: 0;
        }

        .recommendation-content {
            word-break: break-word;
        }

        .recommendation-title {
            font-size: 20px;
            font-weight: 700;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .recommendation-date {
            font-size: 18px;
            color: #555;
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

            .img-fluid {
                width: 800px;
                height: 380px;
                border-radius: 12px;
                object-fit: cover;
                margin: 0 auto;
            }

            h2 {
                font-size: 24px;
            }

            .section-title {
                text-align: center;
                font-size: 22px;
            }

            .text,
            .card-text,
            .recommendation-date {
                font-size: 18px;
            }

            .recommendation-title {
                font-size: 20px;
            }

            .recommendation-image {
                width: 160px;
                height: 120px;
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

            .img-fluid {
                width: 800px;
                height: 280px;
                border-radius: 12px;
                object-fit: cover;
                margin: 0 auto;
            }

            h2 {
                font-size: 22px;
            }

            .section-title {
                text-align: center;
                font-size: 20px;
            }

            .recommendation-image {
                width: 120px;
                height: 100px;
            }

            .text,
            .card-text,
            .recommendation-date {
                font-size: 16px;
            }

            .recommendation-title {
                font-size: 18px;
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

            .img-fluid {
                width: 800px;
                height: 230px;
                border-radius: 12px;
                object-fit: cover;
                margin: 0 auto;
            }

            h2 {
                font-size: 20px;
            }

            .section-title {
                text-align: center;
                font-size: 18px;
            }

            .recommendation-image {
                width: 110px;
                height: 90px;
            }

            .text,
            .card-text,
            .recommendation-date {
                font-size: 14px;
            }

            .recommendation-title {
                font-size: 16px;
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

            .img-fluid {
                width: 800px;
                height: 180px;
                border-radius: 12px;
                object-fit: cover;
                margin: 0 auto;
            }

            h2 {
                font-size: 18px;
            }

            .section-title {
                text-align: center;
                font-size: 16px;
            }

            .recommendation-image {
                width: 100px;
                height: 80px;
            }

            .text,
            .card-text,
            .recommendation-date {
                font-size: 12px;
            }

            .recommendation-title {
                font-size: 14px;
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
                        <a class="nav-link" href="<?= base_url('/en/home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/en/about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #009EF2;" href="<?= base_url('/en/article'); ?>">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/en/product'); ?>">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/en/activity'); ?>">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/en/contact'); ?>">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Language
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/id/artikel/<?= $artikel['slug_id'] ?>">Indonesia</a>
                            </li>
                            <li><a class="dropdown-item" href="#">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Background -->
    <div class="rectangle">
        <h1>Article Details</h1>
    </div>

    <!-- Article -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-3" style="border: none;">
                    <h2 class="mb-2" style="font-weight: 700; text-align: center;">
                        <?= $artikel['judul_artikel']; ?>
                    </h2>
                    <p class="text mb-3" style="text-align: center;">
                        <?= date('Y-m-d', strtotime($artikel['created_at'])); ?>
                    </p>
                    <img src="<?= base_url('IMG/' . $artikel['foto_artikel']); ?>" class="img-fluid mb-4"
                        style="border-radius: 12px" alt="Artikel Image" loading="lazy">
                    <p class="card-text text-justify"><?= $artikel['deskripsi_artikel']; ?>
                    </p>
                </div>
            </div>

            <div class=" col-lg-4">
                <div class="recommendation-section">
                    <h5 class="section-title">Also read other articles</h5>
                    <?php foreach ($artikelTerkait as $artikel): ?>
                        <a href="<?= base_url('/en/article/' . url_title($artikel['slug_en'], '-', true)); ?>"
                            style="text-decoration: none; color: inherit;">
                            <div class="recommendation-card"> <img src="<?= base_url('IMG/' . $artikel['foto_artikel']); ?>"
                                    alt="Image-Artikel-Lainnya" class="recommendation-image" loading="lazy">
                                <div class="recommendation-content">
                                    <h6 class="recommendation-title">
                                        <?= $artikel['judul_artikel']; ?>
                                    </h6>
                                    <p class=" recommendation-date">
                                        <?= date('Y-m-d', strtotime($artikel['created_at'])); ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

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