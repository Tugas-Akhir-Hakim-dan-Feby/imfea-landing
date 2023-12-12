@extends('frontend.layouts.main')
@section('content')

        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Kordinator Wilayah Kami</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item" aria-current="page">Kordinator</li>
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

        <!-- Project Start -->
        <div class="container-fluid project py-5 my-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Kordinator Wilayah Kami</h5>
                    <h1>Temui tim kami yang siap membantu Anda</h1>
                </div>
               
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-16 col-xl-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid rounded w-100" alt="">
                            <span class="position-absolute px-2 py-2 bg-primary text-white rounded" style="top: 20px; right: 25px; font-size: 1.5rem;">Indramayu</span>
        
                            <div class="blog-content text-center px-5 py-5">
                                <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-4" alt="">
                                <h5 class="mb-3" style="font-size: 2rem;">Hubungi <br> Riski Ahmad Ilham</h5>
                                <span class="text-secondary d-block mb-4" style="font-size: 1.2rem;">No Hp : +62895341206291</span>
                                <p class="mt-4" style="font-size: 1.3rem;">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

@endsection