<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    @include('layout.assets')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layout.navbar')
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">Alifia Cookies</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Content Here -->

    <div class="container-xxl feature py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-4">Mengapa Memilih Alifia Cookies?</h1>
                    <p class="mb-4">
                        Alifia cookies terbuat dari bahan berkualitas terbaik. Dibuat dengan cara yang higienis dan dengan resep turun temurun sehingga memiliki cita rasa yang otentik dan enak.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Resep Otentik</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="feature-box border rounded p-4">
                                        <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                        <h4 class="mb-3">Proses Pembuatan Higienis</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="feature-box border rounded p-4">
                                <i class="fa fa-check fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Citarasa Tidak Diragukan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <h1>Produk Alifia Cookies</h1>
        <div class="row my-4">
            <!-- @foreach($cookies as $dt)
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <img src="{{ asset('assets/img/tata-cookies.png') }}" class="w-100" alt="">
                    <hr>
                    <div class="text-center">
                        <h4>{{$dt->title}}</h4>
                        <p>{{$dt->description}}</p>
                        <a class="btn btn-primary py-3 px-5" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            @endforeach -->
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <img src="{{ asset('assets/img/tata-cookies.png') }}" class="w-100" alt="">
                    <hr>
                    <div class="text-center">
                        <h4>Kastangel</h4>
                        <p>Kue Keju</p>
                        <a class="btn btn-primary py-3 px-5" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <img src="{{ asset('assets/img/tata-cookies.png') }}" class="w-100" alt="">
                    <hr>
                    <div class="text-center">
                        <h4>Nastar</h4>
                        <p>Kue Kering Isi Nanas</p>
                        <a class="btn btn-primary py-3 px-5" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <img src="{{ asset('assets/img/tata-cookies.png') }}" class="w-100" alt="">
                    <hr>
                    <div class="text-center">
                        <h4>Putri Salju</h4>
                        <p>Kue Kering Dibalut Gula Halus</p>
                        <a class="btn btn-primary py-3 px-5" href="">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>