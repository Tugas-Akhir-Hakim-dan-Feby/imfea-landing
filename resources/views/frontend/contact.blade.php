@extends('frontend.layouts.main')
@section('content')
        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Kontak Kami</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item" aria-current="page">Kontak</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Fact Start -->
        <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">99</h1>
                            <h5 class="text-white mt-1">Berhasil Mendapatkan Penghargaan Pendidikan</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">25</h1>
                            <h5 class="text-white mt-1">Orang Terdaftar Secara Khsusus</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">50</h1>
                            <h5 class="text-white mt-1">Total Sukses Mencapai Tujuan</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-primary counter-value">120</h1>
                            <h5 class="text-white mt-1">Total Orang Yang Sudah Bekerja</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->

        <!-- Contact Start -->
         <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1>Hubungi Kami</h1>
                    <p>Dengan senang hati kami siap membantu menjawab segala pertanyaan Anda.</p>                    
                </div>
                <div class="contact-detail position-relative p-5">
                    <div class="row g-5 mb-5 justify-content-center">
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Alamat Kami</h4>
                                    <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">30 Kenari, Indramayu</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Hubungin Kami</h4>
                                    <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Email Kami</h4>
                                    <a class="h5" href="mailto:info@example.com" target="_blank">info@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="p-5 h-100 rounded contact-map">
                                <iframe  class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5205834931544!2d108.32026847475149!3d-6.32651629366299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebc01eaaaaaab%3A0x6ef909d627eb01d7!2sAlun-Alun%20Indramayu!5e0!3m2!1sid!2sid!4v1702270084439!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="p-5 rounded contact-form">
                                <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="Nama Anda">
                                </div>
                                <div class="mb-4">
                                    <input type="email" class="form-control border-0 py-3" placeholder="Email Anda">
                                </div>
                                {{-- <div class="mb-4">
                                    <input type="text" class="form-control border-0 py-3" placeholder="">
                                </div> --}}
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" placeholder="Message"></textarea>
                                </div>
                                <div class="text-start">
                                    <button class="btn bg-primary text-white py-3 px-5" type="button">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Contact End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

@endsection