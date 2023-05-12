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
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

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
                        <span class="d-none d-lg-block">Produk Kita</span>
                    </a>

                </div><!-- End Logo -->





            </div>
        </nav><!-- End Header -->
        <section class="mt-4 mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card pt-4 pb-4 bg-light">
                            <div class="container">
                                <img style="border-radius:20px;width:100%;" src="https://nontonyuk.id/template/img/game/mobile-legends.jpeg" loading="lazy" alt="" class="text-center">
                                <div class="judul-produk pt-4">
                                    <h1 style="font-size:24px;"></h1>
                                    <!-- <h2 style="font-size:20px;"></h2> -->
                                </div>
                                <div class="deskripsi-produk pt-4">
                                    <p>Top up diamond Mobile Legends resmi Moonton 100% legal. Cara beli dm ML termurah. </p>
                                    <ul>
                                        <li>Masukkan ID</li>
                                        <li>Masukkan SERVER ID</li>
                                        <li>Pilih Nominal</li>
                                        <li>Pilih Pembayaran</li>
                                        <li>Klik Pesan Sekarang &amp; lakukan Pembayaran</li>
                                        <li>Diamonds masuk otomatis ke akun Anda </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="card mb-4 bg-light">
                            <div class="card-header card text-white bg-danger">
                                <span style="font-size:20px;">Lengkapi Data Pemesanan</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-12 pb-2">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan Email yang Valid" aria-label="Email" required="">
                                        </div>
                                        <div style="font-size:12px;margin:10px 0 0 2px;">Pengiriman otomatis ke alamat email. Pastikan menulis alamat Email&nbsp;dengan&nbsp;benar</div>
                                    </div>
                                    <div class="col-lg-6 col-12 pb-2">
                                        <div class="form-group">
                                            <label>No. Handphone</label>
                                            <input name="nohp" id="nohp" type="number" class="form-control" placeholder="Masukkan No.Hp (contoh:081xxxxxxxx)" aria-label="NoHp" required="">
                                        </div>
                                        <div style="font-size:12px;margin:10px 0 0 2px;">Pastikan Nomor Handphone yang kalian masukan Terhubung Dengan ovo &amp; ShopepayJika memilih metode pembayaran&nbsp;tersebut</div>
                                    </div>
                                </div>
                                <p></p>
                            </div>
                        </div>
                        <div class="card bg-light mb-4">
                            <div class="card-header card text-white bg-danger">
                                <span style="font-size:20px;">Pilih Nominal</span>
                            </div>
                            <div class="card-body">
                                {{-- <div class="row">


                                    <div class="col-lg-4 col-6">
                                        <input class="btn-check" type="radio" name="harga" id="harga" required="">
                                        <label class="btn btn-check-outline-danger pt-2 pb-2" style="width:100%; margin:0px;">
                                            <small>{{ $produk->nama }}</small>
                                            <br>
                                            <small>{{ $produk->harga }}</small>
                                        </label>
                                    </div>




                                </div> --}}

                                <div class="row">

                                    <div class="col-md-4 col-lg-4 col-sm-4">

                                        <label>
                                            <input type="radio" name="product" id="product" selected checked class="card-input-element" value="{{ $produk->harga }}" />

                                            <div class="card card-default card-input">
                                                <div class="card-header">{{ $produk->nama }}</div>
                                                <div class="card-body">
                                                    {{ $produk->harga }}
                                                </div>
                                            </div>

                                        </label>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card bg-light">
                            <div class="card-header card text-white bg-danger">
                                <span style="font-size:20px;">Metode Pembayaran</span>
                            </div>
                            <div class="card">
                                <div id="wallet" class="card-header" data-toggle="collapse" data-target="#collapse3" aria-expanded="true">
                                    <span class="title">E-Wallet</span>
                                    <span class="accicon">
                                        <i class="fa fa-angle-down rotate-icon"></i>
                                    </span>
                                </div>
                                <div id="collapse3" class="collapse show" data-parent="#accordionExample" style="">
                                    <div class="card-body bg-light pt-0 pb-1">
                                        <div class="row">

                                            @foreach ($result as $pembayaran)
                                            @if ($pembayaran->group == "E-Wallet")
                                            <div class="col-lg-4 col-12">
                                                <input class="btn-check" type="radio" name="metode_pembayaran" id="pembayaran" value="{{ $pembayaran->name }}" >
                                                <label class="btn btn-check-outline-danger pt-2 pb-2" style="width:100%;" >
                                                    <img src="{{ $pembayaran->icon_url }}" height="36">
                                                    <hr>
                                                    <span class="small">{{ $pembayaran->name }}</span>
                                                    <hr>
                                                    <div class="xproduk">
                                                        <input type="hidden" class="hrg" value="2000">
                                                        <input type="hidden" class="fee_cust_flat" value="0">
                                                        <input type="hidden" class="fee_cust_percent" value="{{ $pembayaran->fee_customer->flat }}">
                                                        <span class="xtotal small"></span>
                                                    </div>
                                                </label>
                                            </div>
                                            @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="mt-4">
                            <button id="simpan" name="simpan" type="submit" class="btn btn-danger">Pesan Sekarang</button></div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Modal -->
            <div class="modal fade" id="pesan-produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rincian Pesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Email : <span id="m-email"></span></p>
                            <p>No HP : <span id="m-nohp"></span></p>
                            <hr>
                            <p>Harga Pesanan : <span id="m-produk"></span></p>
                            <hr>
                            <p>Metode Pembayaran : <span id="m-pembayaran"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


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
            <script src="//code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
            <script type="text/javascript">

                $('body').on('click', '#simpan', function(e){
                    $('#pesan-produk').modal('show');

                });

                $('#simpan').click(function(){
                    var email = $('#email').val();
                    var nohp = $('#nohp').val();
                    var product = $('#product').val();
                    var pembayaran = $('#pembayaran:checked').val();
                    console.log(product);

                    var m_email = document.getElementById("m-email");
                    var m_nohp = document.getElementById("m-nohp");
                    var m_produk = document.getElementById("m-produk");
                    var m_pembayaran = document.getElementById("m-pembayaran");
                    m_email.innerHTML = email;
                    m_nohp.innerHTML = nohp;
                    m_produk.innerHTML = product;
                    m_pembayaran.innerHTML = pembayaran;

                });

                $('.close').click(function(){
                    $("#pesan-produk").modal('hide');
                });


            </script>



        </body>

        </html>
