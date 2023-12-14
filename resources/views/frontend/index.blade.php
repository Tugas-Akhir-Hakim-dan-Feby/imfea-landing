@extends('frontend.layouts.main')
@section('content')

        <!-- Carousel Start -->
        <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators" style="display: none">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" ></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/carousel-3.jpg') }}" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-white h4 animated fadeInUp">Solusi Bimbel Terbaik</h6>
                                <h1 class="mb-4 text-white display-1  animated fadeInRight">Agen Solusi Bimbel Inovatif</h1>
                                <p class="mb-5 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>

                                <div class="mb-3">
                                <a href=""><button type="button" class="text-white px-4 py-sm-3 px-sm-5 btn btn-secondary rounded-pill carousel-content-btn1 animated fadeInLeft">Selengkapnya</button></a>
                                </div>

                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Hubungi Kami</button></a>

                            </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/corousel-4.jpg') }}" class="img-fluid" alt="Second slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h6 class="text-white h4 animated fadeInUp">Solusi Bimbel Terbaik</h6>
                                <h1 class="text-white display-1 mb-4 animated fadeInRight">Agen Solusi Bimbel Inovatif</h1>
                                <p class="mb-5 text-white fs-5 animated fadeInDown">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt.</p>
                            
                                <div class="mb-3">
                                    <a href=""><button type="button" class="text-white px-4 py-sm-3 px-sm-5 btn .btn-secondary rounded-pill carousel-content-btn1 animated fadeInLeft">Selengkapnya</button></a>
                                </div>

                                <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Hubungi Kami</button></a>
                            
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev" aria-label="First slide">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next"  aria-label="Second slide">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                
                
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Fact Start -->
        <div class="container-fluid bg-secondary py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".1s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-secondary counter-value">99</h1>
                            <h5 class="text-white mt-1">Berhasil Mendapatkan Penghargaan Pendidikan</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-secondary counter-value">25</h1>
                            <h5 class="text-white mt-1">Orang Terdaftar Secara Khsusus</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-secondary counter-value">50</h1>
                            <h5 class="text-white mt-1">Total Sukses Mencapai Tujuan</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex counter">
                            <h1 class="me-3 text-secondary counter-value">120</h1>
                            <h5 class="text-white mt-1">Total Orang Yang Sudah Bekerja</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->


        <!-- About Start -->
        <div id="about" class="container-fluid py-5 my-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="h-100 position-relative">
                            <img src="{{ asset('assets/img/about-1.jpg') }}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                            <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                                <img src="{{ asset('assets/img/about-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                        <h5 class="text-primary">Tentang Kami</h5>
                        <h1 class="mb-4">Inovasi Pembelajaran di Bimbel HighCode</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur quis purus ut interdum. Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus. Etiam gravida justo nec erat vestibulum, et malesuada augue laoreet.</p>
                        <p class="mb-4">Pellentesque aliquam dolor eget urna ultricies tincidunt. Nam volutpat libero sit amet leo cursus, ac viverra eros tristique. Morbi quis quam mi. Cras vel gravida eros. Proin scelerisque quam nec elementum viverra. Suspendisse viverra hendrerit diam in tempus.</p>
                        <a href="{{ route('about') }}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">Selangkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- webinar start -->
        <div class="container-fluid services py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Webinar Kami</h5>
                    <h1>Temukan Masa Depan Bersama Webinar Kami</h1>
                </div>
                <div class="row g-5 services-inner">

                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            {{-- <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span> --}}
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                              
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: 90px;">
                                {{-- <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt=""> --}}
                                <h6 class="">Membangun Data Warehouse yang Efektif untuk keberhasilan Organisasi</h6>
                                {{-- <span class="text-secondary">24 March 2023</span> --}}
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                                <div class="blog-icon btn btn-secondary px-2 rounded-pill my-auto mb-3">
                                    <a href="{{ route('webinar') }}" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                {{-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a> --}}
                                {{-- <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            {{-- <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span> --}}
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                              
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: 90px;">
                                {{-- <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt=""> --}}
                                <h6 class="">Membangun Data Warehouse yang Efektif untuk keberhasilan Organisasi</h6>
                                {{-- <span class="text-secondary">24 March 2023</span> --}}
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                                <div class="blog-icon btn btn-secondary px-2 rounded-pill my-auto mb-3">
                                    <a href="{{ route('webinar') }}" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                {{-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a> --}}
                                {{-- <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            {{-- <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span> --}}
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                              
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: 90px;">
                                {{-- <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt=""> --}}
                                <h6 class="">Membangun Data Warehouse yang Efektif untuk keberhasilan Organisasi</h6>
                                {{-- <span class="text-secondary">24 March 2023</span> --}}
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                                <div class="blog-icon btn btn-secondary px-2 rounded-pill my-auto mb-3">
                                    <a href="{{ route('webinar') }}" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                {{-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a> --}}
                                {{-- <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            {{-- <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span> --}}
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                              
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: 90px;">
                                {{-- <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt=""> --}}
                                <h6 class="">Membangun Data Warehouse yang Efektif untuk keberhasilan Organisasi</h6>
                                {{-- <span class="text-secondary">24 March 2023</span> --}}
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                                <div class="blog-icon btn btn-secondary px-2 rounded-pill my-auto mb-3">
                                    <a href="{{ route('webinar') }}" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                {{-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a> --}}
                                {{-- <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            {{-- <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span> --}}
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                              
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: 90px;">
                                {{-- <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt=""> --}}
                                <h6 class="">Membangun Data Warehouse yang Efektif untuk keberhasilan Organisasi</h6>
                                {{-- <span class="text-secondary">24 March 2023</span> --}}
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                                <div class="blog-icon btn btn-secondary px-2 rounded-pill my-auto mb-3">
                                    <a href="{{ route('webinar') }}" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                {{-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a> --}}
                                {{-- <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            {{-- <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Web Design</span> --}}
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                              
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: 90px;">
                                {{-- <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt=""> --}}
                                <h6 class="">Membangun Data Warehouse yang Efektif untuk keberhasilan Organisasi</h6>
                                {{-- <span class="text-secondary">24 March 2023</span> --}}
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                                <div class="blog-icon btn btn-secondary px-2 rounded-pill my-auto mb-3">
                                    <a href="{{ route('webinar') }}" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                {{-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a> --}}
                                {{-- <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a> --}}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- webinar End -->


        <!-- kordinator Start -->
        <div class="container-fluid project py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Kordinator Wilayah Kami</h5>
                    <h1>Temui tim kami yang siap membantu Anda</h1>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/project-1.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="{{ route('kordinator') }}" class="text-center">
                                        <h4 class="text-secondary">Penanggung Jawab </h4>
                                        <p class="m-0 text-white">Wilayah Indramayu</p>
                                        <p class="m-0 text-white">Amirul Mukminin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/project-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Penanggung Jawab </h4>
                                        <p class="m-0 text-white">Wilayah Indramayu</p>
                                        <p class="m-0 text-white">Amirul Mukminin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/project-3.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Penanggung Jawab </h4>
                                        <p class="m-0 text-white">Wilayah Indramayu</p>
                                        <p class="m-0 text-white">Amirul Mukminin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/project-4.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Penanggung Jawab </h4>
                                        <p class="m-0 text-white">Wilayah Indramayu</p>
                                        <p class="m-0 text-white">Amirul Mukminin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/project-5.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Penanggung Jawab </h4>
                                        <p class="m-0 text-white">Wilayah Indramayu</p>
                                        <p class="m-0 text-white">Amirul Mukminin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="project-item">
                            <div class="project-img">
                                <img src="{{ asset('assets/img/project-6.jpg') }}" class="img-fluid w-100 rounded" alt="">
                                <div class="project-content">
                                    <a href="#" class="text-center">
                                        <h4 class="text-secondary">Penanggung Jawab </h4>
                                        <p class="m-0 text-white">Wilayah Indramayu</p>
                                        <p class="m-0 text-white">Amirul Mukminin</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- kordinator End -->


        <!-- Artikel Start -->
        <div class="container-fluid blog py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Artikel Kami</h5>
                    <h1>Update Terbaru Artikel Kami</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    
                    
                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Development</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="{{ route('detail_artikel') }}" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Riski Zulhak</h5>
                                <span class="text-secondary">23 April 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Development</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Riski Zulhak</h5>
                                <span class="text-secondary">23 April 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-3.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Mobile App</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white">Selengkapnya</a>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Samsul Arifin</h5>
                                <span class="text-secondary">30 jan 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                {{-- <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a> --}}
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Artikel End -->


        <!-- Pengajar Start -->
        {{-- <div class="container-fluid py-5 mb-5 team">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Tim Pengajar Kami</h5>
                    <h1>Kenali Tim Pengajar Kami</h1>
                </div>
                <div class="owl-carousel team-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('assets/img/team-1.jpg') }}" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Dewi Sulestiani</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('assets/img/team-2.jpg') }}" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Ahmad Zaezuri</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('assets/img/team-3.jpg') }}" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Siti Maemunah</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded team-item">
                        <div class="team-content">
                            <div class="team-img-icon">
                                <div class="team-img rounded-circle">
                                    <img src="{{ asset('assets/img/team-4.jpg') }}" class="img-fluid w-100 rounded-circle" alt="">
                                </div>
                                <div class="team-name text-center py-3">
                                    <h4 class="">Sopyan Manuel</h4>
                                    <p class="m-0">Designation</p>
                                </div>
                                <div class="team-icon d-flex justify-content-center pb-4">
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-secondary text-white rounded-circle m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Pengajar End -->

        {{-- <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Our Testimonial</h5>
                    <h1>Our Client Saying!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                    <div class="testimonial-item border p-4">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('assets/img/testimonial-1.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('assets/img/testimonial-2.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('assets/img/testimonial-3.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                    <div class="testimonial-item border p-4">
                        <div class=" d-flex align-items-center">
                            <div class="">
                                <img src="{{ asset('assets/img/testimonial-4.jpg') }}" alt="">
                            </div>
                            <div class="ms-4">
                                <h4 class="text-secondary">Client Name</h4>
                                <p class="m-0 pb-3">Profession</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                    <i class="fas fa-star me-1 text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="border-top mt-4 pt-3">
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum aliquam dolor eget urna. Nam volutpat libero sit amet leo cursus, ac viverra eros morbi quis quam mi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial End --> --}}


      <!-- Contact Start -->
      <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h1>Hubungi Kami</h1>
                <p>Dengan senang hati kami siap membantu menjawab segala pertanyaan Anda.</p>                    
            </div>
            <div class="contact-detail position-relative p-3">
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
                        <div class="p-1 h-100 rounded contact-map">
                            <iframe  class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5205834931544!2d108.32026847475149!3d-6.32651629366299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebc01eaaaaaab%3A0x6ef909d627eb01d7!2sAlun-Alun%20Indramayu!5e0!3m2!1sid!2sid!4v1702270084439!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-3 rounded contact-form">
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
                                <button class="btn btn-secondary text-white py-3 px-5" type="button">Send Message</button>
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