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
            <h1 class="display-3 mb-4 animated slideInDown">Tentangku</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded-full" src="{{ asset('assets/img/profile-2.jpeg') }}">
                </div>
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">Tentangku</p>
                    <h1 class="display-5 mb-4">Sekilas Tentang Saya</h1>
                    <p class="mb-4">
                        {{ $about_me->value }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Here -->
    <div class="container-xxl py-5">
        <h1>Pendidikan</h1>
        <div class="row my-4">
            @foreach($education as $dt)
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <p>{{$dt->period}}</p>
                    <h4>{{$dt->institute}}</h4>
                    <p>{{$dt->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-xxl py-5">
        <h1>Pengalaman</h1>
        <div class="row my-4">
            @foreach($experiences as $dtx)
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <p>{{$dtx->period}}</p>
                    <h4>{{$dtx->title}}</h4>
                    <p>{{$dtx->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-xxl py-5">
        <h1>Sertifikasi</h1>
        <div class="row my-4">
            @foreach($certification as $dts)
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <p>{{$dts->period}}</p>
                    <h4>{{$dts->cert_title}}</h4>
                    <p>{{$dts->description}}</p>
                </div>
            </div>
            @endforeach
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