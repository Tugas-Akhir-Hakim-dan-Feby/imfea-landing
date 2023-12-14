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
                                <p class="mt-4" style="font-size: 1.3rem; text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptatum adipisci eaque similique dolores omnis dicta illum nesciunt minima eum amet, rerum nemo consectetur sed at ex minus ipsum, voluptatem eligendi, quas earum modi iste alias! Esse, ratione! Molestiae in inventore quas aspernatur id? Accusantium, recusandae? Voluptate, tempore illum nobis modi harum ipsum perferendis commodi ipsam quia consequatur, possimus necessitatibus dolores provident similique quasi? Ipsum reprehenderit eaque commodi odio asperiores harum expedita excepturi perspiciatis ipsa, facere iste illo beatae ex eius voluptates perferendis. Harum, commodi? Quam necessitatibus totam atque maxime excepturi itaque sint, quas, architecto, ipsum laborum non fugit quibusdam suscipit quos id dolor similique illo est omnis consequatur maiores deleniti incidunt. Optio id cum totam quam maxime voluptatibus quis sunt adipisci vitae provident deserunt quae sit iure, dolores eius unde assumenda? Aliquam in atque eum magni, nesciunt adipisci eaque illum quas laboriosam nostrum voluptatibus sed ex corporis earum quisquam beatae doloribus ipsum error maiores inventore ullam nisi! Ipsum reiciendis, natus odio accusantium soluta maxime sit voluptatum animi, at libero architecto, dolor possimus aliquam explicabo ducimus atque. Illum maxime perspiciatis amet accusamus nemo animi, ex atque inventore praesentium quidem rem at minus repellendus repellat harum veritatis tempore magnam fugiat molestias.</p>
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