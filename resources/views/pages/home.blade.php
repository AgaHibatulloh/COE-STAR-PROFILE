@extends('layouts.app')

@section('title', 'Home - Perusahaan Website')

@section('content')
<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="position-relative d-flex justify-content-center align-items-center" style="height: 100vh;">
        <img src="{{ asset('images/banner.jpg') }}" class="img-fluid w-100" style="height: 100vh; object-fit: cover; filter: brightness(0.8);">
        <div class="hero-content position-absolute" style="width: 90%; max-width: 1400px;">
            <div class="container-fluid px-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="hero-card" data-aos="zoom-in" data-aos-duration="1200" style="transform: scale(1.2);">
                            <div class="row g-0">
                                <!-- Ketua Photo Section -->
                                <div class="col-md-5" data-aos="fade-right" data-aos-delay="300">
                                    <img src="{{ asset('images/leader.jpg') }}" class="img-fluid" style="object-fit: cover; object-position: center; height: 380px;">
                                </div>
                                <!-- Quote Section -->
                                <div class="col-md-5 d-flex align-items-center">
                                    <div class="p-4" data-aos="fade-left" data-aos-delay="400">
                                        <p class="text-uppercase small mb-2">BUSINESS CONSULTANT</p>
                                        <h1 class="display-5 fw-bold mb-3">We Help Company Grow</h1>
                                        <div class="mb-3">
                                            <div class="mb-2">
                                                <i class="fas fa-quote-left fa-2x text-muted opacity-50"></i>
                                            </div>
                                            <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum, ex et lobortis varius, lectus diam vehicula quam.</p>
                                            <div class="d-flex align-items-center mt-3">
                                                <div class="border-end pe-3 me-3">
                                                    <h5 class="mb-0">John Doe</h5>
                                                    <p class="small text-muted mb-0">Chief Executive Officer</p>
                                                </div>
                                                <img src="{{ asset('images/signature.png') }}" alt="Signature" style="height: 40px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <a href="#research" class="text-white">
                <i class="fas fa-chevron-down fa-2x"></i>
            </a>
        </div>
    </div>
</section>

<!-- Wave Divider -->
<div class="section-divider" style="background-color: #212529;">
    <div class="divider-wave"></div>
</div>

<!-- Research Section -->
<section class="research-section" id="research">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-4 fw-bold mb-4">Penelitian Kami</h1>
            </div>
        </div>
    </div>
    <div id="photoSlideshow" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-duration="1200">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/photo1.jpg') }}" class="d-block rounded" style="height: auto; aspect-ratio: 16 / 9; object-fit: cover; margin: 0 auto; max-width: 60%;" alt="Photo 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo2.jpg') }}" class="d-block rounded" style="height: auto; aspect-ratio: 16 / 9; object-fit: cover; margin: 0 auto; max-width: 60%;" alt="Photo 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/photo3.jpg') }}" class="d-block rounded" style="height: auto; aspect-ratio: 16 / 9; object-fit: cover; margin: 0 auto; max-width: 60%;" alt="Photo 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#photoSlideshow" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#photoSlideshow" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Diagonal Divider -->
<div class="section-divider" style="background-color: #f8f9fa;">
    <div class="divider-diagonal"></div>
</div>

<!-- Team Section -->
<section class="team-section" id="team">
    <div class="container my-5">
        <h2 class="text-center mb-5 display-5 fw-bold" data-aos="fade-up">Anggota Kami</h2>
        <div class="row">
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <img src="{{ asset('images/member1.jpg') }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5>John Doe</h5>
                    <p>CEO</p>
                </div>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="team-member">
                    <img src="{{ asset('images/member2.jpg') }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5>Jane Smith</h5>
                    <p>CTO</p>
                </div>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                    <img src="{{ asset('images/member3.jpg') }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h5>Michael Brown</h5>
                    <p>COO</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Curves Divider -->
<div class="section-divider">
    <div class="divider-curves"></div>
</div>
@endsection