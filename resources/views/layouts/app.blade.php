<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perusahaan Website')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.jpg') }}" alt="LOGO" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-dark" href="/contact">Button</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4 mt-5">
        <div class="container">
            <div class="row g-0">
                <!-- Left Card -->
                <div class="col-md-7">
                    <div class="card bg-light h-100 border-0" style="border-radius: 0;">
                        <div class="card-body">
                
                            <p>&copy; CoE Smart Transportation And Robotics (STAR) . All rights reserved.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Card -->
                <div class="col-md-5">
                    <div class="card bg-dark text-white h-100 border-0" style="border-radius: 0; margin-right: 0;">
                        <div class="card-body">
                            <h5 class="card-title">LOGO</h5>
                            <p class="card-text">
                                Address: 123 Main Street, City, Country<br>
                                Email: info@company.com<br>
                                Phone: +123 456 7890
                            </p>
                            <div class="mt-3">
                                <a href="#" class="btn btn-outline-light btn-sm me-2">Facebook</a>
                                <a href="#" class="btn btn-outline-light btn-sm me-2">Twitter</a>
                                <a href="#" class="btn btn-outline-light btn-sm">Instagram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>