<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="//fonts.gstatic.com" rel="preconnect">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet ">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
        * Template Name: NiceAdmin - v2.4.1
        * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>

        <!-- ======= Header ======= -->

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <div class="d-flex align-items-center justify-content-between">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="assets/img/logo.png" alt="">
                        <span class="d-none d-lg-block">NiceAdmin</span>
                    </a>

                </div><!-- End Logo -->





            </div>
        </nav><!-- End Header -->


        <section id="produk" class="mt-5">
            <div class="container">



                <!-- Slides with controls -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/slide2.png" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/slide2.png" class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/slide2.png" class="img-fluid" alt="...">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div><!-- End Slides with controls -->




            </div>
        </section>

        <section id="produk" class="mt-3">
            <div class="container">
                <div class="col-lg-12 text-center pb-3">
                    <h3>Menjual Akun Netflix, Spotify Premium, Game &amp; Voucher Murah Pengiriman Otomatis 1 Detik</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-pills justify-content-center pb-2">
                            <li class="nav-item small">
                                <a class="nav-link active" data-toggle="tab" href="#streaming">Streaming</a>
                            </li>
                            <li class="nav-item small">
                                <a class="nav-link" data-toggle="tab" href="#game">Game</a>
                            </li>
                            <li class="nav-item small">
                                <a class="nav-link" data-toggle="tab" href="#apps">Apps</a>
                            </li>
                            <li class="nav-item small">
                                <a class="nav-link" data-toggle="tab" href="#voucher">Voucher</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div id="streaming" class="tab-pane fade show active">

                                <div class="row mt-2">
                                    @foreach ($product as $products)
                                    <div class="col-lg-2 col-4 pb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <a href="/produk/{{ $products->id }}"><img style="border-radius:20px;width:100%;" src="https://panel.nontonyuk.id/img/1.jpg" loading="lazy" alt="NETFLIX" sharing="" class="img-thumbnail text-center mt-2"></a>
                                                <h5 class="card-title text-center">{{ $products->nama }}</h5>
                                                <p class="card-text text-center">Stock {{ $products->qty }}</p>


                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ======= Footer ======= -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="text-align: center;">
                        <p>Copyright © 2023 <a href="https://nontonyuk.id/">Belpora</a> - All Rights Reserved. </p>
                    </div>
                </div>
            </div>
        </div><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{  asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{  asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{  asset('assets/vendor/chart.js/chart.min.js') }}"></script>
        <script src="{{  asset('assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{  asset('assets/vendor/quill/quill.min.js') }}"></script>
        <script src="{{  asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{  asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{  asset('assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>



    </body>

    </html>
