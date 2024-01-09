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
            <h1 class="display-3 mb-4 animated slideInDown">#Racunshopeebyta</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Content Here -->
    <div class="container-xxl py-5">
        <h1>Referensi Belanja</h1>
        <div class="row my-4">
            <div class="col-4 my-2">
                <div class="border rounded p-4 shadow-lg">
                    <img src="{{ asset('assets/img/bostanten.webp') }}" class="w-100" alt="">
                    <hr>
                    <div class="text-center">
                        <h4>Sepatu Balet</h4>
                        <a class="btn btn-primary py-3 px-5" href="https://shope.ee/9KH03zFXCa">Pesan Sekarang</a>
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