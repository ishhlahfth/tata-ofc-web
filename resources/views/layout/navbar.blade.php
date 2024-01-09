<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small>#TataPersonalWebsite</small>
            <small>#WelcomeToMySite</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small><i class="fa fa-envelope text-primary me-2"></i>tatana12@gmail.com</small>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="display-5 text-primary m-0">Tata's Site</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('') }}" class="nav-item nav-link active">Beranda</a>
                <a href="{{url('/tentangku')}}" class="nav-item nav-link">Tentangku</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">By Tata</a>
                    <div class="dropdown-menu border-light m-0">
                        <a href="{{url('/ootd')}}" class="dropdown-item">OOTD By Me</a>
                        <a href="{{url('/alifia-cookies')}}" class="dropdown-item">Alifia Cookies</a>
                        <a href="{{url('/racunshopeebyta')}}" class="dropdown-item">#Racunshopeebyta</a>
                    </div>
                </div>
                <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-instagram text-primary"></small>
                </a>
                <a class="btn btn-light btn-sm-square rounded-circle ms-3" href="">
                    <small class="fab fa-linkedin-in text-primary"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->