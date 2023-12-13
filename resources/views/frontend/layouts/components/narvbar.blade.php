 <!-- Spinner Start -->
{{--  <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div> --}}
<!-- Spinner End -->

<!-- Topbar Start -->
{{-- <div class="container-fluid bg-dark py-2 d-none d-md-flex">
    <div class="container">
        <div class="d-flex justify-content-between topbar">
            <div class="top-info">
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>30 Indramayu, Indonesia</small>
                <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>projectpembelejaran@gmail.com</small>
            </div>
            <div id="note" class="text-secondary d-none d-xl-flex">
                <small>Catatan: Temukan potensi Anda di dunia pembelajaran bersama kami!</small>
            </div>
            <div class="top-link">
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
            </div>
        </div>
    </div>
</div> --}}
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid bg-primary">
    
        <nav class="navbar navbar-dark navbar-expand-lg py-0 navbar-scrolllll ">
            <a href="{{ route('home') }}" class="navbar-brand">
                <h1 class="text-white fw-bold d-block">High<span class="text-secondary">Code</span> </h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link ">Home</a>
                    {{--  {{ Request::routeIs('home*') ? 'active' : '' }} --}}

                    <a href="{{ route('about') }}" class="nav-item nav-link ">Tentang</a>
                    {{-- {{ Request::is('about*') ? 'active' : '' }} --}}

                    <a href="{{ route('webinar') }}" class="nav-item nav-link ">Webinar</a>
                    {{-- {{ Request::is('service*') ? 'active' : '' }} --}}

                    <a href="{{ route('kordinator') }}" class="nav-item nav-link ">Kordinator</a>
                    {{-- {{ Request::is('project*') ? 'active' : '' }} --}}

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{ route('detail_artikel') }}" class="dropdown-item {{ Request::routeIs('detail_artikel*') ? 'active' : '' }}">Detail Artikel</a>
                            {{-- <a href="{{ route('team') }}" class="dropdown-item {{ Request::routeIs('team*') ? 'active' : '' }}">Our Team</a> --}}
                            <a href="{{ route('detail_pengejar') }}" class="dropdown-item {{ Request::routeIs('detail_pengejar*') ? 'active' : '' }}">Detail Pengajar</a>
                            {{-- <a href="{{ route('pages') }}" class="dropdown-item {{ Request::routeIs('pages*') ? 'active' : '' }}">404 Page</a> --}}
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="nav-item nav-link {" class="nav-item nav-link">Kontak</a>
                    {{-- { Request::is('contact*') ? 'active' : '' }} --}}

                </div>
            </div>

            <div class="d-none d-xl-flex flex-shirink-1 ms-3">
                <div class="d-flex align-items-center justify-content-center me-4">
                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-light me-2 d-sm-block">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-sm btn-outline-light">Register</a>
                </div>                
            </div>

        </nav>
    
</div>
<!-- Navbar End -->