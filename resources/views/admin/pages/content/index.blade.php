<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('admin.layout.head')
    @include('admin.layout.assets')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('admin.layout.navbar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pengaturan Konten Tentangku</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Konten</li>
                                <li class="breadcrumb-item active">Tentangku</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <form action="{{url('/c/content/update/about_me')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="card-title">Tentang Saya</h3>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Masukkan text tentang saya" name="value">{{$about_text->value}}</textarea>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end gap-4 align-items-center">

                                            <div>
                                                <button class="btn btn-primary" type="submit">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <form action="{{url('/c/content/update/email')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="card-title">Email</h3>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="value" value="{{$email->value}}">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end gap-4 align-items-center">


                                            <div>
                                                <button class="btn btn-primary" type="submit">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <form action="{{url('/c/content/update/instagram')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="card-title">Instagram</h3>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Instagram" name="value" value="{{$instagram->value}}">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end gap-4 align-items-center">


                                            <div>
                                                <button class="btn btn-primary" type="submit">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <form action="{{url('/c/content/update/phone')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="card-title">Phone</h3>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="phone" name="value" value="{{$phone->value}}">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end gap-4 align-items-center">
                                            <div>
                                                <button class="btn btn-primary" type="submit">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('admin.layout.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
</body>

</html>