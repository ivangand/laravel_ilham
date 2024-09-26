@extends('layout.layout')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero" style="background-image: url('path/to/your/background-image.jpg'); background-size: cover; padding: 100px 0;">
    <div class="container text-center text-white">
        <p class="lead">Siswa SMK Bakti Nusantara 666 </p>
        <a href="/about" class="btn btn-secondary mx-2">Pelajari Lebih Lanjut</a>
        <a href="/contact" class="btn btn-secondary mx-2">Hubungi Saya</a>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="projects py-5 bg-light" id="featured-projects">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-4">Proyek Unggulan</h2>
        <div class="row justify-content-center">
            <!-- Project Cards Example -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="assets/img/portfolio/projek.jpeg" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title">Nama Proyek</h5>
                        <p class="card-text">Deskripsi singkat proyek...</p>
                        <a href="/project" class="btn btn-secondary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Add more project cards as needed -->
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
            <a href="/about" class="text-white mx-2">About Me</a>
            <a href="/project" class="text-white mx-2">Projects</a>
            <a href="/contact" class="text-white mx-2">Contact</a>
        </div>
    </div>
</footer>
@endsection
