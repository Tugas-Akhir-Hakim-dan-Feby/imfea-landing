@extends('frontend.layouts.main')
@section('content')

        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4 animated slideInDown">Artikel Kami</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item" aria-current="page">Artikel</li>
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


        <!-- Detail Artikel -->
        <div class="container-fluid blog py-5 my-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 1000px;">
                    <h5 class="text-primary">Artikel Kami</h5>
                    <h1>Update Terbaru Artikel Kami</h1>
                </div>
                <div class="row g-5 justify-content-center">
                    <div class="col-lg-14 col-xl-12 wow fadeIn" data-wow-delay=".3s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-1.jpg') }}" class="img-fluid rounded w-100" alt="">
                            <span class="position-absolute px-2 py-2 bg-primary text-white rounded" style="top: 20px; right: 25px; font-size: 1.5rem;">Web Design</span>
        
                            <div class="blog-content text-center px-5 py-5">
                                <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-4" alt="">
                                <h5 class="mb-3" style="font-size: 2rem;">By Daniel Martin</h5>
                                <span class="text-secondary d-block mb-4" style="font-size: 1.2rem;">24 March 2023</span>
                                <p class="mt-4" style="font-size: 1.3rem;">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                        </div>
        
                        <!-- Komentar -->
                        <div class="comments mt-5">
                            <h3>Komentar</h3>
                            <!-- Daftar Komentar -->
                            <div class="comment">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{ asset('assets/img/team-1.jpg') }}" class="img-fluid rounded-circle border border-4 border-white me-3" alt="" style="width: 50px; height: 50px;">
                                    <div>
                                        <h5 class="mb-1">John Doe</h5>
                                        <span class="text-secondary">25 March 2023</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hac habitasse platea dictumst.</p>
                            </div>

                            <!-- Form Komentar -->
                            <div class="comment-form mt-4">
                                <h4>Tinggalkan Komentar</h4>
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Komentar</label>
                                        <textarea class="form-control" id="comment" name="comment" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Komentar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        


                   {{--   <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="blog-item position-relative bg-light rounded">
                            <img src="{{ asset('assets/img/blog-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="">
                            <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px;">Development</span>
                            <div class="blog-btn d-flex justify-content-between position-relative px-3" style="margin-top: -75px;">
                                <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto">
                                    <a href="" class="btn text-white ">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">23 April 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
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
                                    <a href="" class="btn text-white ">Read More</a>
                                </div>
                                <div class="blog-btn-icon btn btn-secondary px-4 py-3 rounded-pill ">
                                    <div class="blog-icon-1">
                                        <p class="text-white px-2">Share<i class="fa fa-arrow-right ms-3"></i></p>
                                    </div>
                                    <div class="blog-icon-2">
                                        <a href="" class="btn me-1"><i class="fab fa-facebook-f text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-twitter text-white"></i></a>
                                        <a href="" class="btn me-1"><i class="fab fa-instagram text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content text-center position-relative px-3" style="margin-top: -25px;">
                                <img src="{{ asset('assets/img/admin.jpg') }}" class="img-fluid rounded-circle border border-4 border-white mb-3" alt="">
                                <h5 class="">By Daniel Martin</h5>
                                <span class="text-secondary">30 jan 2023</span>
                                <p class="py-2">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt libero sit amet</p>
                            </div>
                            <div class="blog-coments d-flex justify-content-between px-4 py-2 border bg-primary rounded-bottom">
                                <a href="" class="text-white"><small><i class="fas fa-share me-2 text-secondary"></i>5324 Share</small></a>
                                <a href="" class="text-white"><small><i class="fa fa-comments me-2 text-secondary"></i>5 Comments</small></a>
                            </div>
                        </div>
                    </div>  --}}

          
        <!-- Blog End -->




        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

@endsection