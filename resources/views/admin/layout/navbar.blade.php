<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-pink elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">By Lifia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar pt-4">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{url('/admin')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Welcome
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Konten
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ml-2">
                            <a href="{{url('/admin/content/about-me')}}" class="nav-link">
                                <p>Tentang Saya</p>
                            </a>
                        </li>
                        <li class="nav-item ml-2">
                            <a href="{{url('/admin/content/bylifia')}}" class="nav-link">
                                <p>Tentang ByLifia</p>
                            </a>
                        </li>
                        <li class="nav-item ml-2">
                            <a href="{{url('/admin/content/education')}}" class="nav-link">
                                <p>Pendidikan</p>
                            </a>
                        </li>
                        <li class="nav-item ml-2">
                            <a href="{{url('/admin/content/experiences')}}" class="nav-link">
                                <p>Pengalaman</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/gallery-ootd')}}" class="nav-link">
                        <i class="nav-icon fas fa-images"></i>
                        <p>
                            Galeri OOTD
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/alifia-cookies')}}" class="nav-link">
                        <i class="nav-icon fas fa-cookie-bite"></i>
                        <p>
                            Alifia Cookies
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/admin/racun-shopee')}}" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Racun Shopee
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-lock"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>