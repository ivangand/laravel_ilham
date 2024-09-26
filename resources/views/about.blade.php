@extends('layout.layout')

@section('title', 'About Me')

@section('content')
<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white">Tentang Saya</h2>
        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content -->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <img src="assets/img/portfolio/ilham.jpeg" class="img-fluid rounded-circle mb-3" alt="Profile Photo">
                <p class="lead">Saya adalah siswa SMK Bakti Nusantara 666, dengan latar latar belakang jurusan rekayasa perangkat lunak. Saya selalu bersemangat untuk belajar hal baru dan berinovasi dalam setiap proyek yang saya kerjakan.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">Selama di sekolah, saya telah mengerjakan berbagai proyek, mulai dari pembuatan web peminjaman barang ataupun peminjaman barang mobile. Pengalaman ini telah membantu saya untuk mengasah keterampilan dalam pemrograman, desain grafis, dan problem-solving.</p>
            </div>
        </div>
        <!-- Skills and Expertise -->
        <div class="row justify-content-center mt-5">
            <h3 class="text-center text-uppercase text-white mb-4">Keterampilan dan Keahlian</h3>
            <div class="col-lg-6">
                <ul class="list-group">
                    <li class="list-group-item bg-primary text-white">Pemrograman (html, css, php)</li>
                    <li class="list-group-item bg-primary text-white">Pengembangan Web (HTML, CSS, Laravel)</li>
                </ul>
            </div>
        </div>
        <!-- Goals and Aspirations -->
        <div class="text-center mt-5">
            <h3 class="text-uppercase text-white mb-3">Tujuan dan Aspirasi</h3>
            <p class="lead">Di masa depan, saya bercita-cita menjadi seorang ahli pengembangan aplikasi berbasis web yang dapat membantu memecahkan masalah di masyarakat. Saya berharap untuk terus belajar dan berkembang dalam bidang teknologi.</p>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer bg-dark text-white py-4">
    <div class="container text-center">
        <p>© 2024 Ilham Adriano. All rights reserved.</p>
        <div class="social-links">
            <a href="https://www.linkedin.com" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.instagram.com" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            <!-- Add more social media links as needed -->
        </div>
        <div class="quick-links mt-2">
            <a href="/" class="text-white mx-2">Home</a>
            <a href="/projects" class="text-white mx-2">Projects</a>
            <a href="/contact" class="text-white mx-2">Contact</a>
        </div>
    </div>
</footer>
@endsection
