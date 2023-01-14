<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pemetaan Lampu Penerangan Jalan Umum</title>
    <meta content="Website Pemetaan Lampu Penerangan Jalan Umum" name="description">
    <meta content="PJU" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/admin/media/logos/logo.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/landing/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/landing/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing/custom/css/custom.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    {{-- Leaflet GeoSearch --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.css"/>
    <script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/bundle.min.js"></script>

    <style>
        #process-loading { position:fixed; width:100vw; height:100vh; z-index: 100; display:none; opacity:unset !important; }
        #process-loading img { position:fixed; left:0; top:0; right:0; bottom:0px; margin:auto; width:300px; }
        .addBackground { background-color:#BDC3C7; z-index: 1000 !important; }

        .status-laporan {
            color: white;
            font-weight: bold;
            padding: 1px 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <span id="process-loading" class="text-center"><img src="{{ asset('assets/loading.gif') }}"></span>
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:laporjpudepok@example.com">laporpjudepok@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 812-3456-7890</span></i>
            </div>

            <div class="social-links d-none d-md-flex align-items-center">
                <a href="javascript:;" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="javascript:;" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="javascript:;" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="javascript:;" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.html">Depok<span>PJUMap</span></a></h1>

            <nav id="navbar" class="navbar">
                <ul style="margin-right: 30px;">
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#pemetaan">Pemetaan</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#ask">Pertanyaan</a></li>
                </ul>
                <a class="btn-lapor" href="javascript:;">Buat Laporan</a>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center text-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Selamat Datang di Depok<span>PJUMap</span></h1>
            <h3 class="mt-3">Sebagai wadah tempat pelaporan terkait permasalahan <br> <span class="fw-bold" style="color: #4B56D2;">Lampu Penerangan Jalan Umum(PJU) Kota Depok</span></h3>
            <div class="d-flex justify-content-center mt-5">
                <a href="javascript:;" class="btn-get-started fw-bold btn-lapor">Lapor Sekarang</a>
                <a href="https://www.youtube.com/watch?v=85FuAhrsJHE" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Pengecekan JPU Kota Depok</span></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    {{-- Start Pemetaan PJU --}}
    <section id="pemetaan" class="section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Pemetaan PJU Rusak</h2>
                <h3>Pemetaan Laporan <span>Lampu PJU</span> Kota Depok</h3>
            </div>

            <div id="map"></div>
        </div>
    </section>
    {{-- End Pemetaan PJU --}}

    {{-- Start Main --}}
    <main id="main">
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-sitemap"></i></div>
                            <h4 class="title"><a href="">Kemudahan Tracking</a></h4>
                            <p class="description justify">Kemudahan dalam melakukan tracking terhadap setiap laporan yang masuk.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-check-double"></i></div>
                            <h4 class="title"><a href="">Mudah diterapkan</a></h4>
                            <p class="description justify">Memudahkan dalam pelaporan mengenai permasalahan lampu penerangan jalan umum di sekitar kita.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-grid-alt"></i></div>
                            <h4 class="title"><a href="">Transparansi</a></h4>
                            <p class="description justify">Terciptanya transparansi dan akuntabilitas terkait proses perbaikan lampu penerangan jalan umum yang telah dilaporkan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Start Tentang --}}
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Tentang</h2>
                    <h3>Cari Tahu Lebih Banyak <span>Tentang DepokPJUMap</span></h3>
                    <p>Bertujuan untuk membantu masyarakat Kota Depok dalam melaporkan terkait kerusakan lampu penerangan jalan umum yang ada</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/landing/custom/img/about-bg.jpg') }}" class="img-fluid" alt="Tentang" style="height: 523px; object-fit: cover;">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center justify" data-aos="fade-up" data-aos-delay="100">
                        <h3>DepokPJUMap akan terus berupaya agar dapat memberikan manfaat yang lebih besar bagi masyarakat Kota Depok.</h3>
                        <p class="fst-italic mb-0">
                            DepokPJUMap menyediakan fitur-fitur yang mendukung dalam pelaporan perbaikan PJU yang ada seperti:
                        </p>
                        <ul>
                        <li>
                            <i class="bx bx-map-alt"></i>
                            <div>
                                <h5>Peta interaktif yang menunjukkan lokasi lampu pju</h5>
                                <p class="justify">Mempermudah melihat lokasi lampu pju secara visual melalui peta, sehingga dapat membantu dalam mencari lampu pju yang ingin dilihat atau dilaporkan kerusakannya.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-food-menu"></i>
                            <div>
                                <h5>Formulir laporan kerusakan lampu</h5>
                                <p class="justify">Dengan adanya formulir laporan kerusakan lampu ini, diharapkan dapat memudahkan masyarakat dalam melaporkan kerusakan lampu pju di Kota Depok dan mempercepat proses perbaikan lampu tersebut.</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-bell"></i>
                            <div>
                                <h5>Sistem pemberitahuan otomatis terkait kerusakan lampu</h5>
                                <p class="justify">Membantu dalam menjaga agar kerusakan lampu pju tidak berlarut-larut dan dapat segera diperbaiki.</p>
                            </div>
                        </li>
                        </ul>
                    </div>
                    <p class="justify">
                        Dengan adanya DepokPJUMap, diharapkan dapat membantu masyarakat dalam mengatasi permasalahan-permasalahan terkait lampu penerangan jalan umum yang ada, sehingga dapat meningkatkan kenyamanan dan keamanan masyarakat Kota Depok.
                    </p>
                </div>
            </div>
        </section>
        {{-- End Tentang --}}

        {{-- Start Statistik Perhitungan --}}
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journals" style="font-size: 27px;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ count($laporanData) }}" data-purecounter-duration="1" class="purecounter"></span>
                            <h5>Laporan Kerusakan</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-check" style="font-size: 27px;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ count($laporanData->where('status', 1)) }}" data-purecounter-duration="1" class="purecounter"></span>
                            <h5>Laporan Diterima</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-journal-arrow-up" style="font-size: 27px;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ count($laporanData->where('status', 2)) }}" data-purecounter-duration="1" class="purecounter"></span>
                            <h5>Laporan Diteruskan</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-journal-x" style="font-size: 27px;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{ count($laporanData->where('status', 3)) }}" data-purecounter-duration="1" class="purecounter"></span>
                            <h5>Laporan Ditolak</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Statistik Perhitungan --}}

        {{-- Start Hasil Pertanyaan --}}
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                @if (count($pertanyaan) > 0)
                <div class="section-title">
                    <h2>Pertanyaan</h2>
                    <h3>Seputar <span>DepokPJUMap</span></h3>
                    <p>Pertanyaan yang pernah diajukan oleh pengunjung website DepokPJUMap</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">
                            @foreach ($pertanyaan as $key => $data)
                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq-{{ $key+1 }}">{{ $data->pertanyaan }} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq-{{ $key+1 }}" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        {{ $data->jawaban }}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @else
                <div class="section-title">
                    <h2>Pertanyaan</h2>
                    <h3>Belum Ada <span>Pertanyaan Yang Diajukan</span></h3>
                </div>
                @endif
            </div>
        </section>
        {{-- End Hasil Pertanyaan --}}

        {{-- Start Pertanyaan --}}
        <section id="ask" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pertanyaan</h2>
                    <h3><span>Ajukan Pertanyaan</span></h3>
                    <p>Kirimkan saran, keluhan, atau pertanyaan lainnya terkait dengan DepokPJUMap atau layanan yang kami berikan.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Alamat Kami</h3>
                            <p style="padding: 0 20px;">Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Jakarta Selatan.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Kami</h3>
                            <p>laporpjudepok@example.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Hubungi Kami</h3>
                            <p>+62 812-3456-7890</p>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253688.19914467906!2d106.62681200457641!3d-6.537073754422112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea1bf23be10b%3A0x6f45229f920d9e73!2sDinas%20Perhubungan%20Kota%20Depok!5e0!3m2!1sid!2sid!4v1673576483867!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form id="send-message" action="{{ route('sendMessage') }}" method="POST" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="col form-group">
                                    <label>Email (opsional)</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Pertanyaan</label>
                                    <textarea class="form-control" name="pertanyaan" rows="5" placeholder="Masukkan pertanyaan..." required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button id="btn-send" class="btn btn-primary" type="submit">Kirim Pertanyaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Pertanyaan --}}
    </main>
    <!-- End Main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container py-4">
        <div class="copyright text-white">
            Copyright &copy; 2023 DepokPJUMap. All rights reserved. Developed by <a class="text-white" href="https://www.linkedin.com/in/agungmubarok/" target="_blank"><strong>Agung Mubarok</strong></a>.
        </div>
        {{-- <div class="credits text-white">
            Designed by <a href="https://bootstrapmade.com/" class="text-white" target="_blank"><strong>BootstrapMade</strong></a>
        </div> --}}
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Button trigger modal -->

    <!-- Modal -->
    @include('modal_success')
    @include('modal_laporan')
</body>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/landing/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/landing/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/landing/vendor/waypoints/noframework.waypoints.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/landing/js/main.js') }}"></script>
<script>
    $(document).ready(() => {
        // Kirim Pertanyaan
        $('#send-message').on('submit', function() {
            $('#btn-send').attr('disabled', true);
            $('#btn-send').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>&nbsp;<span class="sr-only">Loading...</span>');
        });

        // Jika Sukses
        if ('{{session()->has('successSendMessage')}}'){
            $(window).on('load', function(){ 
                $('#modalSuccessMessage').modal('show');
            });
        }

        // View Modal Lapor
        $(window).on('load', function(){ 
            $('.btn-lapor').on('click', function() {
                $('#modalLaporan').modal({backdrop: 'static', keyboard: false});
                $('#modalLaporan').modal('show');

                setTimeout(function(){ map_lapor.invalidateSize()}, 500);
            });
        });
    });
</script>

@include('leaflet-script')
@stack('laporan-script') 
</html>