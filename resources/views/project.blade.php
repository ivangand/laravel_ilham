@extends('layout.layout')

@section('title', 'Project')

@section('content')
<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Proyek</h2>
        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="projects bg-light py-5">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-4">Proyek Unggulan</h2>
        <div class="row justify-content-center">
            <!-- Example Project Card -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/img/portfolio/projek.jpeg" class="card-img-top" alt="Proyek Unggulan 1">
                    <div class="card-body">
                        <h5 class="card-title">Nama Proyek</h5>
                        <p class="card-text">Deskripsi singkat tentang proyek ini, mencakup tujuan, proses, dan hasil yang dicapai.</p>
                        <a href="#" class="btn btn-primary">Detail Proyek</a>
                    </div>
                </div>
            </div>
            <!-- Repeat for additional projects -->
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
            <a href="/about" class="text-white mx-2">About Me</a>
            <a href="/contact" class="text-white mx-2">Contact</a>
        </div>
    </div>
</footer>
@endsection
