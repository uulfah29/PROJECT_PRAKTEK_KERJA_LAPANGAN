<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Dashboard</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('p1/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('p1/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="icon" href="{{asset('p4/images/logo UMBJM.png')}}">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a class="navbar-brand">
                    <img src="{{asset('p1/dist/img/Logo UMBJM.png')}}" alt="AdmnLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Kemahasiswaan Universitas Muhammadiyah Banjarmasin </span>
                </a>
                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"> Dashboard</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <b>Panduan dan Format Penulisan Proposal dan LPJ</b>
                                    <p class="card-text">
                                        Sebelum mengajukan proposal dan menyerahkan lembar pertanggung jawaban silahkan baca panduan
                                        aplikasi yang telah disedikan dan format penulisan proposal dan LPJ.
                                    </p>
                                    <a href="#" class="card-link">Baca</a>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <b>Status Berkas</b>
                                    <p class="card-text">
                                        Untuk melihat status proses berkas anda silahkan pilih menu di bawah.
                                    </p>
                                    <a href="/sbdpl" class="card-link">Proposal</a>
                                    <a href="/sbdpp" class="card-link">LPJ</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <b>Proposal</b>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title"></h6>
                                    <p class="card-text">Untuk mengajuaku proposal silahkan input data sesuai format yang ada pada
                                        form pengajuan.</p>
                                    <a href="/Proposall" class="btn btn-primary">Input</a>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <b>Laporan Pertanggung Jawaban</b>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title"></h6>
                                    <p class="card-text">Untuk menyerahkan lembar pertanggung jawaban silahkan input data sesuai format
                                        yang ada pada form penyerahan
                                    </p>
                                    <a href="/Lpj" class="btn btn-primary">Input</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <b>Proposal</b>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title"></h6>
                                    <p class="card-text">Untuk melihat daftar pengajuan proposal silahkan klik menu proposal</p>
                                    <a href="/Dpp" class="btn btn-primary">Proposal</a>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <b>Laporan Pertanggung Jawaban</b>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title"></h6>
                                    <p class="card-text">Untuk melihat daftar penyerahan lembar pertanggung jawaban silahkan klik menu LPJ </p>
                                    </p>
                                    <a href="/Dpl" class="btn btn-primary">LPJ</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('p1/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('p1/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('p1/dist/js/adminlte.min.js')}}"></script>
</body>

</html>