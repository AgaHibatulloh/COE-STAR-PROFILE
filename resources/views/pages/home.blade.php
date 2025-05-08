@extends('layouts.app')

@section('title', 'Home - Perusahaan Website')

@section('content')
<div class="container-fluid p-0">
    <div class="position-relative">
        <img src="{{ asset('images/banner.jpg') }}" class="img-fluid w-100" style="height: 80vh; object-fit: cover;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bg-white p-4 rounded shadow">
                            <p class="text-uppercase small mb-2">BUSINESS CONSULTANT</p>
                            <h1 class="display-4 fw-bold mb-4">We Help Company Grow</h1>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum, ex et lobortis varius, 
                            lectus diam vehicula quam, id tempor sapien ante at velit amet. Fusce porttitor velit non leo aliquam, 
                            et amet fermentum lorem tempus. Nam sit ut eleifend nisl.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class=" display-4 fw-bold mb-4">Penelitian Kami</h1>
            </div>
        </div>
    </div>
    <div id="photoSlideshow" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('images/photo1.jpg') }}" class="d-block w-100 rounded" style="height: auto; aspect-ratio: 16 / 9; object-fit: cover; margin: 0 auto; max-width: 60%;" alt="Photo 1">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('images/photo2.jpg') }}" class="d-block w-100 rounded" style="height: auto; aspect-ratio: 16 / 9; object-fit: cover; margin: 0 auto; max-width: 60%;" alt="Photo 2">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('images/photo3.jpg') }}" class="d-block w-100 rounded" style="height: auto; aspect-ratio: 16 / 9; object-fit: cover; margin: 0 auto; max-width: 60%;" alt="Photo 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#photoSlideshow" data-bs-slide="prev" style="background-color: white;">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#photoSlideshow" data-bs-slide="next" style="background-color: white;">
            <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
            <span class="visually-hidden">Next</span>
        </button>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">Anggota Kami</h2>
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/member1.jpg') }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h5>John Doe</h5>
            <p>CEO</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/member2.jpg') }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h5>Jane Smith</h5>
            <p>CTO</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/member3.jpg') }}" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">
            <h5>Michael Brown</h5>
            <p>COO</p>
        </div>
    </div>
</div>
@endsection