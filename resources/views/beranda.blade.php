<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pemetaan Lampu Penerangan Jalan Umum</title>
    <meta content="Website Pemetaan Lampu Penerangan Jalan Umum" name="description">
    <meta content="PJU" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/landing/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

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
</head>
<body>
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
                    <li><a class="nav-link scrollto" href="#pemetaan">Pemetaan PJU</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#ask">Pertanyaan</a></li>
                </ul>
                <a class="btn-lapor" href="">Buat Laporan</a>
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
                <a href="#" class="btn-get-started scrollto fw-bold">Lapor Sekarang</a>
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
                <h3>Pemetaan <span>Lampu PJU Rusak</span> Kota Depok</h3>
            </div>

            {{-- <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('assets/landing/custom/img/about-bg.jpg') }}" class="img-fluid" alt="Pemetaan PJU" style="height: 523px; object-fit: cover;">
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
            </div> --}}
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
                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                        <i class="bi bi-journals"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Total Laporan Kerusakan</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                        <i class="bi bi-journal-check"></i>
                        <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Laporan Diterima</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                        <i class="bi bi-journal-medical"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Laporan Diproses</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                        <i class="bi bi-house-x"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>PJU Sudah Tidak Digunakan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Statistik Perhitungan --}}

        {{-- Start Hasil Pertanyaan --}}
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Saran / Keluhan / Pertanyaan</h2>
                    <h3>Seputar <span>DepokPJUMap</span></h3>
                    <p>Lihat saran/keluhan/pertanyaan yang pernah dikirim oleh pengunjung website DepokPJUMap.</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">
                            <li>
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
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
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3203407933106!2d106.8326563!3d-6.3525585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x17da46bdf9308386!2sSTT%20Terpadu%20Nurul%20Fikri%20-%20Kampus%20B!5e0!3m2!1sid!2sid!4v1672305662831!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email (opsional)">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Masukkan pesan..." required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Kirim Pertanyaan</button>
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
            Copyright &copy; 2022 DepokPJUMap. All rights reserved. Developed by <a class="text-white" href="https://www.linkedin.com/in/agungmubarok/" target="_blank"><strong>Agung Mubarok</strong></a>.
        </div>
        <div class="credits text-white">
            Designed by <a href="https://bootstrapmade.com/" class="text-white" target="_blank"><strong>BootstrapMade</strong></a>
        </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/landing/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/landing/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/landing/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/landing/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/landing/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/landing/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/landing/js/main.js') }}"></script>

</body>

</html>