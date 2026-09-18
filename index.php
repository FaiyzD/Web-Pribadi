```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            <span>MY</span> PROFILE
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#biodata">Biodata</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#pendidikan">Pendidikan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#organisasi">Organisasi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#kompetensi">Kompetensi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#portofolio">Portofolio</a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- ================= HERO ================= -->
<section id="home" class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6 order-2 order-lg-1">

                <p class="hero-small">
                    HELLO, I'M
                </p>

                <h1>
                    Habil Faiz
                </h1>

                <h3>
                    Student & Web Developer
                </h3>

                <p class="hero-text">
                    Saya adalah seorang pelajar yang memiliki ketertarikan
                    terhadap teknologi, pemrograman, dan desain website.
                </p>

                <a href="#tentang" class="btn btn-main">
                    Tentang Saya
                    <i class="bi bi-arrow-right"></i>
                </a>

            </div>


            <div class="col-lg-6 order-1 order-lg-2 text-center">

                <div class="profile-wrapper">

                    <div class="profile-circle">
                        <img src="me.jpeg"
                             alt="Foto Profile">
                    </div>

                    <div class="yellow-circle"></div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= BIODATA ================= -->
<section id="biodata" class="section">

    <div class="container">

        <div class="section-heading">
            <p>PERSONAL INFORMATION</p>
            <h2>Biodata</h2>
        </div>


        <div class="row g-4">

            <div class="col-lg-4">

                <div class="info-card text-center">

                    <div class="icon-box">
                        <i class="bi bi-person-fill"></i>
                    </div>

                    <h4>Nama Lengkap</h4>

                    <p>
                        Habil Faiz Khoiril Atsar
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="info-card text-center">

                    <div class="icon-box">
                        <i class="bi bi-calendar-event"></i>
                    </div>

                    <h4>Tempat & Tanggal Lahir</h4>

                    <p>
                        Kendal, 25 Januari 2010
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="info-card text-center">

                    <div class="icon-box">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                    <h4>Alamat</h4>

                    <p>
                        Kendal, Jawa Tengah
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="info-card text-center">

                    <div class="icon-box">
                        <i class="bi bi-envelope-fill"></i>
                    </div>

                    <h4>Email</h4>

                    <p>
                        Faiyzcp@gmail.com
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="info-card text-center">

                    <div class="icon-box">
                        <i class="bi bi-controller"></i>
                    </div>

                    <h4>Hobi</h4>

                    <p>
                        Bermain Game,Membaca Buku, Dan Olahraga    
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="info-card text-center">

                    <div class="icon-box">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>

                    <h4>Status</h4>

                    <p>
                        Pelajar
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= TENTANG ================= -->
<section id="tentang" class="section section-dark">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5">

                <div class="about-title">

                    <p>ABOUT ME</p>

                    <h2>
                        Tentang<br>
                        <span>Saya</span>
                    </h2>

                </div>

            </div>


            <div class="col-lg-7">

                <div class="about-content">

                    <p>
                        Halo, saya Faiz. Saya adalah seorang pelajar yang
                        memiliki ketertarikan terhadap dunia teknologi,
                        terutama dalam bidang pemrograman dan desain website.
                    </p>

                    <p>
                        Saya senang mempelajari hal-hal baru dan mencoba
                        membuat berbagai proyek menggunakan teknologi yang
                        saya pelajari.
                    </p>

                    <p>
                        Saya percaya bahwa pengalaman dan proses belajar
                        merupakan hal penting untuk mengembangkan kemampuan
                        dan menjadi lebih baik di masa depan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= GALERI ================= -->
<section id="galeri" class="section">

    <div class="container">

        <div class="section-heading">

            <p>MY MOMENTS</p>

            <h2>Galeri Foto</h2>

        </div>


        <div class="row g-4">

            <!-- FOTO 1 -->
            <div class="col-md-4">

                <div class="gallery-card">

                    <img src="muncak2.jpeg"
                         alt="Foto Mucak">

                    <div class="gallery-content">

                        <h4>Foto Mucak</h4>

                        <p>
                            Momen saat menikmati waktu dan
                            suasana di Mucak.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 2 -->
            <div class="col-md-4">

                <div class="gallery-card">

                    <img src="curug1.jpeg"
                         alt="Foto Air Terjun">

                    <div class="gallery-content">

                        <h4>Foto Air Terjun</h4>

                        <p>
                            Momen saat mengunjungi air terjun
                            dan menikmati keindahan alam.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 3 -->
            <div class="col-md-4">

                <div class="gallery-card">

                    <img src="temenn.jpeg"
                         alt="Foto Bersama Teman">

                    <div class="gallery-content">

                        <h4>Foto Bersama Teman</h4>

                        <p>
                            Momen kebersamaan dan keseruan
                            bersama teman-teman.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 4 -->
            <div class="col-md-4">

                <div class="gallery-card">

                    <img src="pemandangan.jpeg"
                         alt="Foto Pemandangan">

                    <div class="gallery-content">

                        <h4>Foto Pemandangan</h4>

                        <p>
                            Foto pemandangan alam yang menjadi
                            salah satu momen yang berkesan.
                        </p>

                    </div>

                </div>

            </div>


            <!-- FOTO 5 -->
            <div class="col-md-4">

                <div class="gallery-card">

                    <img src="kegiatan.jpeg"
                         alt="Foto Kegiatan">

                    <div class="gallery-content">

                        <h4>Foto Kegiatan</h4>

                        <p>
                            Dokumentasi kegiatan dan pengalaman
                            yang pernah saya lakukan.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= PENDIDIKAN ================= -->
<section id="pendidikan" class="section section-light">

    <div class="container">

        <div class="section-heading">

            <p>MY JOURNEY</p>

            <h2>Riwayat Pendidikan</h2>

        </div>


        <div class="timeline">

            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-card">

                    <span>2025 - Sekarang</span>

                    <h4>SMK / SMA</h4>

                    <h5>SMKN 3 KENDAL</h5>

                    <p>
                        Jurusan yang sedang ditempuh dan
                        kegiatan pembelajaran.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-card">

                    <span>2022 - 2025</span>

                    <h4>SMP</h4>

                    <h5>SMPN 3 BOJA</h5>

                    <p>
                        Pendidikan tingkat sekolah menengah pertama.
                    </p>

                </div>

            </div>


            <div class="timeline-item">

                <div class="timeline-dot"></div>

                <div class="timeline-card">

                    <span>2016 - 2022</span>

                    <h4>SD</h4>

                    <h5>SDN JAWISARI</h5>

                    <p>
                        Pendidikan tingkat sekolah dasar.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= ORGANISASI ================= -->
<section id="organisasi" class="section">

    <div class="container">

        <div class="section-heading">

            <p>EXPERIENCE</p>

            <h2>Riwayat Organisasi</h2>

        </div>


        <div class="row g-4">

            <div class="col-md-6">

                <div class="experience-card">

                    <div class="experience-icon">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <div>

                        <span>2023 - Sekarang</span>

                        <h4>Komunitas</h4>

                        <p>
                            Berpartisipasi dalam kegiatan dan komunitas
                            untuk menambah pengalaman.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= KELEBIHAN ================= -->
<section id="kelebihan" class="section section-light">

    <div class="container">

        <div class="section-heading">

            <p>MY STRENGTHS</p>

            <h2>Kelebihan Saya</h2>

        </div>


        <div class="row g-4">

            <div class="col-md-4">

                <div class="strength-card">

                    <i class="bi bi-lightbulb-fill"></i>

                    <h4>Kreatif</h4>

                    <p>
                        Mampu mencari ide dan membuat solusi
                        dalam mengerjakan berbagai tugas.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="strength-card">

                    <i class="bi bi-book-fill"></i>

                    <h4>Mau Belajar</h4>

                    <p>
                        Senang mempelajari teknologi dan
                        kemampuan baru.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="strength-card">

                    <i class="bi bi-check-circle-fill"></i>

                    <h4>Bertanggung Jawab</h4>

                    <p>
                        Berusaha menyelesaikan tugas dengan
                        baik dan tepat waktu.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= PRESTASI ================= -->
<section id="prestasi" class="section">

    <div class="container">

        <div class="section-heading">

            <p>ACHIEVEMENTS</p>

            <h2>Prestasi</h2>

        </div>


        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="achievement-card">

                    <i class="bi bi-trophy-fill"></i>

                    <h4>Prestasi / Penghargaan</h4>

                    <p>
                        PRO PLAYER BENEDETTA
                    </p>

                    <span>Sekarang</span>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= KOMPETENSI ================= -->
<section id="kompetensi" class="section section-dark">

    <div class="container">

        <div class="section-heading heading-dark">

            <p>MY SKILLS</p>

            <h2>Kompetensi</h2>

        </div>


        <div class="row">

            <div class="col-lg-6">

                <div class="skill">

                    <div class="skill-info">
                        <span>HTML</span>
                        <span>90%</span>
                    </div>

                    <div class="progress">

                        <div class="progress-bar"
                             style="width: 90%;">
                        </div>

                    </div>

                </div>


                <div class="skill">

                    <div class="skill-info">
                        <span>CSS</span>
                        <span>80%</span>
                    </div>

                    <div class="progress">

                        <div class="progress-bar"
                             style="width: 80%;">
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="skill">

                    <div class="skill-info">
                        <span>Bootstrap</span>
                        <span>85%</span>
                    </div>

                    <div class="progress">

                        <div class="progress-bar"
                             style="width: 85%;">
                        </div>

                    </div>

                </div>


                <div class="skill">

                    <div class="skill-info">
                        <span>PHP</span>
                        <span>70%</span>
                    </div>

                    <div class="progress">

                        <div class="progress-bar"
                             style="width: 70%;">
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-lg-6">

                <div class="skill">

                    <div class="skill-info">
                        <span>AI</span>
                        <span>99%</span>
                    </div>

                    <div class="progress">

                        <div class="progress-bar"
                             style="width: 99%;">
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= PORTOFOLIO ================= -->
<section id="portofolio" class="section">

    <div class="container">

        <div class="section-heading">

            <p>MY WORK</p>

            <h2>Portofolio Karya</h2>

        </div>


        <div class="row g-4">

            <div class="col-lg-4">

                <div class="portfolio-card">

                    <img src="web.jpeg"
                         alt="Website Profile">

                    <div class="portfolio-content">

                        <span>WEB DEVELOPMENT</span>

                        <h4>Website Profile</h4>

                        <p>
                            Website profile pribadi menggunakan
                            HTML, CSS, dan Bootstrap.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="portfolio-card">

                    <div class="portfolio-placeholder">
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <div class="portfolio-content">

                        <span>PROGRAMMING</span>

                        <h4>Sistem Informasi</h4>

                        <p>
                            Project sistem informasi sederhana
                            menggunakan PHP dan MySQL.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="portfolio-card">

                    <div class="portfolio-placeholder">
                        <i class="bi bi-palette-fill"></i>
                    </div>

                    <div class="portfolio-content">

                        <span>DESIGN</span>

                        <h4>Desain Digital</h4>

                        <p>
                            Berbagai desain poster, UI website,
                            dan karya digital lainnya.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->
<footer>

    <div class="container text-center">

        <h3>
            FAIZ
        </h3>

        <p>
            Student & Web Developer
        </p>

        <div class="social">

            <a href="https://www.instagram.com/faiyzd?stkn=MXhyamdxN2Q5bjZtag==">
                <i class="bi bi-instagram"></i>
            </a>

            <a href="https://github.com/FaiyzD">
                <i class="bi bi-github"></i>
            </a>

            <a href="faiyzcp@gmail">
                <i class="bi bi-envelope-fill"></i>
            </a>

        </div>

        <hr>

        <p class="copyright">
            © 2026 Faiz. All Rights Reserved.
        </p>

    </div>

</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
```
