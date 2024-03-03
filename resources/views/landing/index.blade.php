<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LPK Garuda Mestakung Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('templates/assets/img/GMI/logo.png') }}" rel="icon">
    <link href="{{ asset('templates/assets/img/GMI/logo.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('templates/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('templates/assets/css/style.css?v=1.0') }}" rel="stylesheet">
    <link href="{{ asset('templates/assets/css/floating.css') }}" rel="stylesheet">
</head>

<body>
    @include('landing.header')

    <section class="d-flex align-items-center section-bg">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-md-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('templates/assets/img/GMI/14.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/GMI/12.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/GMI/13.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/GMI/9.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/GMI/1.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('templates/assets/img/GMI/4.jpg') }}" class="d-block w-100"
                                    alt="..." style="border-radius: 10px;width: 370px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="margin-top: 20px;padding: 20px;">
                    <p class="justify-content-center;"><i class="fa fa-map-pin" style="padding-right: 10px;"></i> Tegal,
                        Central Java</p>
                    <h1>Garuda Mestakung Indonesia (GMI)
                        <span></span>
                    </h1>
                    <p style="text-align: justify;margin-top: 10px;margin-bottom: 20px;">LPK Garuda Mestakung Indonesia
                        merupakan suatu
                        lembaga pelatihan
                        kerja di Wilayah
                        jawa Tengah, khususnya Kabupaten/Kota Tegal yang independen berdasarkan Akte Notaris
                        No. 01 tanggal 18 Agustus 2023, yang beralamat di Jl. kaibon Rt. 03 Rw. 03 Desa Balamoa
                        kecamatan Pangkah Kabupaten Tegal.</p>
                    <div class="d-flex">
                        <a href="#lokasi">
                        <button type="button" class="btn btn-primary"><i class="fa fa-map-pin"></i> Location</button>
                        </a>
                        <a target="_blank" href="https://www.tiktok.com/@lpkgmi2023" class="btn btn-outline-primary"
                            style="margin-left: 10px;"><i class="bi bi-play-circle"></i><span> Watch Tiktok
                                GMI</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main" style="padding: 20px;">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                    <h3>Find Out More <span>About Us</span></h3>
                    <p>Mencetak Calon Pekerja
                        Migran Indonesia yang
                        Unggul</p>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">

                        <img src="https://lh3.googleusercontent.com/p/AF1QipMgWp-AOaGdVvClzC-h0NHDrNiljH0P3xta4CBb=s1360-w1360-h1020"
                            class="img-fluid" alt="" style="border-radius: 10px;">
                        <img src="{{ asset('templates/assets/img/GMI/3.jpg') }}" class="img-fluid" alt=""
                            style="border-radius: 10px;padding-top: 10px;">

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang Kami</h3>
                        <p style="text-align: justify;">
                            <b>LPK GARUDA MESTAKUNG INDONESIA</b> merupakan suatu lembaga pelatihan kerja di Wilayah
                            jawa Tengah, khususnya Kabupaten/Kota Tegal yang independen berdasarkan Akte Notaris
                            No. 01 tanggal 18 Agustus 2023, yang beralamat di Jl. kaibon Rt. 03 Rw. 03 Desa Balamoa
                            kecamatan Pangkah Kabupaten Tegal. Dengan kewenangan utama melaksanakan pelatihan
                            bahasa yang berbasis kompetensi dalam rangka tujuan untuk membantu mengentaskan
                            kemiskinan dan pengangguran di wilayah Jawa Tengah
                        </p>
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-4" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalProsedur"><button
                                        type="button" class="btn btn-primary text-white"
                                        style="width: 100%;text-align: left;height: 50px;"><b><i class="bi bi-book"
                                                style="padding-right: 10px;"></i>
                                            Fishing Korea</b></button></a>
                            </div>
                            <div class="col-md-4" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalSarpras"><button
                                        type="button" class="btn btn-primary text-white"
                                        style="width: 100%;text-align: left;height: 50px;"><b><i
                                                class="bi bi-building" style="padding-right: 10px;"></i>
                                            Sarpras</b></button></a>
                            </div>
                            <div class="col-md-4" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><button
                                        type="button" class="btn btn-primary text-white"
                                        style="width: 100%;text-align: left;height: 50px;"><b><i class="fa fa-sitemap"
                                                style="padding-right: 10px;"></i>
                                            Struktur</b></button></a>
                            </div>
                        </div>

                        <ul>
                            <li>
                                <i class="bx bx-book"></i>
                                <div>
                                    <h5>Visi</h5>
                                    <p style="text-align: justify;">
                                        Menjadi Lembaga Pendidikan dan Pelatihan yang terkemuka, terunggul, terdepan dan
                                        terbesar
                                        di Indonesia yang mampu menghasilkan Insan yang unggul, profesional, dan
                                        berkualitas global.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-book"></i>
                                <div>
                                    <h5>Misi</h5>
                                    <p style="text-align: justify;">
                                        Menerapkan kurikulum yang sesuai dengan kebutuhan
                                        pasar kerja regional dan
                                        internasional di era globalisasi.
                                    </p>
                                    <p style="text-align: justify;">
                                        Secara terus menerus berusaha melakukan perbaikan
                                        dalam sistem dan metode
                                        pengajaran untuk meningkatkan kualitas lulusannya.
                                    </p>
                                    <p style="text-align: justify;">
                                        Melakukan peningkatan perbaikan yang
                                        berkesinambungan terhadap infrastruktur
                                        untuk
                                        kelancaran proses belajar mengajar agar tercipta suasana belajar yang ideal.
                                    </p>
                                    <p style="text-align: justify;">
                                        Membentuk sumber daya manusia yang unggul, profesional, berkualitas dan
                                        berbudi
                                        pekerti luhur.
                                    </p>
                                    <p style="text-align: justify;">
                                        Menjadi lembaga pendidikan dan pelatihan yang dipercaya dan bermanfaat bagi
                                        masyarakat.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="520" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="520" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Pendidikan Korea GMI</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Karyawan GMI</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Penerbangan</p>
                        </div>
                    </div>
                </div>

                <br />
                <div class="card">
                    <div class='sk-ww-google-business-profile' data-embed-id='25374831'></div>
                    <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
                </div>

            </div>
        </section>

        {{-- <section id="clients" class="clients section-bg">
            <div class="container" data-aos="zoom-in">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section> --}}

        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <h3>Check our <span>Services</span></h3>
                    <p>LPK Garuda Mestakung Indonesia Mencetak Calon Pekerja Migran Indonesia yang Unggul</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalTahap">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>

                                <h4>Tahapan
                                    Fishing
                                    Korea
                                </h4>
                                <p>Klik untuk melihat detail tahapan fishing korea</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalProsedur">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>

                                <h4>Syarat Fishing Korea</h4>

                                <p>Klik untuk melihat detail persyaratan fishing korea</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalKelebihan">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>

                                <h4>Kelebihan
                                    GMI Korea
                                </h4>

                                <p>Klik untuk melihat detail kelebihan LPK GMI Korea</p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    "LPK Garuda Mestakung Indonesia Mencetak Calon Pekerja Migran Indonesia yang Unggul"
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    "Pelatihan Bahasa Korea Selatan Dari Awal"
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    "Bimbingan Dari Awal Hingga Keberangkatan"
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    "Kesempatan Bekerja di Kapal Korea Selatan"
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    "Pengalaman Tinggal di Korea Selatan"
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>

        {{-- <section id="reviews" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Reviews</h2>
                    <h3>Check our <span>Reviews</span></h3>
                    <p>LPK Garuda Mestakung Indonesia Mencetak Calon Pekerja
                        Migran Indonesia yang
                        Unggul</p>
                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="100">
                        <div class='sk-ww-google-reviews' data-embed-id='25368619'></div>
                        <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
                    </div>

                </div>

            </div>
        </section> --}}



        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="galeri" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Galeri</h2>
                    <h3>Galeri <span>GMI</span></h3>
                    <p>LPK Garuda Mestakung Indonesia Mencetak Calon Pekerja
                        Migran Indonesia yang
                        Unggul</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="0" class="active" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('templates/assets/img/GMI/14.jpg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('templates/assets/img/GMI/12.jpg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('templates/assets/img/GMI/gmi1.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('templates/assets/img/GMI/33.jpg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('templates/assets/img/GMI/334.jpg') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Carousel wrapper -->
                        {{-- <div class='sk-ww-google-business-photo' data-embed-id='25368624'></div> --}}
                        {{-- <script src='https://widgets.sociablekit.com/google-business-photos/widget.js' async defer></script> --}}
                    </div>
                </div>

            </div>
        </section>

        <div class="section-title">

            <p>LPK Garuda Mestakung Indonesia Mencetak Calon Pekerja
                Migran Indonesia yang
                Unggul</p><br />

            <a href="{{ url('galeri') }}">
                <h2>Klik More Galeri</h2>
            </a>
        </div>

        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @foreach ($images as $index => $image)
                        <div class="col-md-3 mb-4">
                            <div class="card"
                                style="background-image: url('{{ asset('templates/assets/img/GMI/' . ($index + 1) . '.jpg') }}'); background-size: cover; border-radius: 10px; height: 250px;">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>



        <div id="reviews" style="padding-top: 20px;padding-bottom: 20px;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Reviews</h2>
                    <h3>Check our <span>Reviews</span></h3>
                    <p>LPK Garuda Mestakung Indonesia Mencetak Calon Pekerja
                        Migran Indonesia yang
                        Unggul</p>
                </div>
                <div class='sk-ww-google-reviews' data-embed-id='25368619'></div>
                <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
            </div>
        </div>

        <section class="contact" id="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <h3><span>Garuda Mestakung Indonesia</span></h3>
                    <p>LPK Garuda Mestakung Indonesia (GMI) Mencetak Calon Pekerja
                        Migran Indonesia yang
                        Unggul</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100" id="lokasi">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>GMI Address</h3>
                            <p>JL. Kaibon Rt. 03 Rw. 03 Desa Balamoa
                                Kec. Pangkah Kab. Tegal
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>lpkgarudamestakungindonesia@gmail.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>WhatsApp</h3>
                            <p>082221108191</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.929751248736!2d109.1843675!3d-6.9522777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbfe260681b91%3A0x122ab99fb2d88a7!2sLpk%20Garuda%20Mestakung%20Indonesia!5e0!3m2!1sid!2sid!4v1708396367934!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <!--<div class="col-lg-6">-->
                    <!--    <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col form-group">-->
                    <!--                <input type="text" name="name" class="form-control" id="name"-->
                    <!--                    placeholder="Your Name" required>-->
                    <!--            </div>-->
                    <!--            <div class="col form-group">-->
                    <!--                <input type="email" class="form-control" name="email" id="email"-->
                    <!--                    placeholder="Your Email" required>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="form-group">-->
                    <!--            <input type="text" class="form-control" name="subject" id="subject"-->
                    <!--                placeholder="Subject" required>-->
                    <!--        </div>-->
                    <!--        <div class="form-group">-->
                    <!--            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>-->
                    <!--        </div>-->
                    <!--        <div class="my-3">-->
                    <!--            <div class="loading">Loading</div>-->
                    <!--            <div class="error-message"></div>-->
                    <!--            <div class="sent-message">Your message has been sent. Thank you!</div>-->
                    <!--        </div>-->
                    <!--        <div class="text-center"><button type="submit">Send Message</button></div>-->
                    <!--    </form>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
    </main>

    <div class="kc_fab_wrapper"></div>

    @include('landing.footer')

    <!-- Struktur Organisasi -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Struktur Organisasi</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('img/struktur-gmi.png') }}" class="img-fluid rounded-4" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Sarana & Prasarana --}}
    <div class="modal fade" id="modalSarpras" tabindex="-1" aria-labelledby="modalSarpras" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalSarpras">Sarana & Prasarana</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('img/sarpras2.png') }}" class="img-fluid rounded-4" alt="">
                            <img src="{{ asset('img/sarpras3.png') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Prosedur --}}
    <div class="modal fade" id="modalProsedur" tabindex="-1" aria-labelledby="modalProsedur" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalProsedur">Prosedur Fishing Korea</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('img/prosedur_gmi_korea.png') }}" class="img-fluid rounded-4"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Tahapan --}}
    <div class="modal fade" id="modalTahap" tabindex="-1" aria-labelledby="modalTahap" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTahap">Tahapan Fishing Korea</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('img/tahapan.png') }}" class="img-fluid rounded-4" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Kelebihan --}}
    <div class="modal fade" id="modalKelebihan" tabindex="-1" aria-labelledby="modalKelebihan" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalKelebihan">Kelebihan GMI Korea</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <i class="fa fa-check"></i> Pelatihan Bahasa Korea Selatan Dari Awal
                            </p>
                            <p>
                                <i class="fa fa-check"></i> Bimbingan Dari Awal Hingga Keberangkatan
                            </p>
                            <p>
                                <i class="fa fa-check"></i> Kesempatan Bekerja di Kapal Korea Selatan
                            </p>
                            <p>
                                <i class="fa fa-check"></i> Pengalaman Tinggal di Korea Selatan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="preloader"></div>

    {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.min.js') }}"></script>
    <script src="{{ asset('templates/assets/js/kc.fab.js') }}"></script>
    <script>
        $(document).ready(function() {
            var links = [{
                    "bgcolor": "#128c7e",
                    "icon": "<i class='fa fa-whatsapp'></i>"
                },
                {
                    "url": "https://wa.me/6282221108191",
                    "title": "WhatsApp GMI",
                    "bgcolor": "#128c7e",
                    "color": "#fffff",
                    "icon": "<i class='fa fa-whatsapp'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.tiktok.com/@lpkgmi2023?_t=8kB6vVQYsoT&_r=1",
                    "title": "Tiktok GMI",
                    "bgcolor": "#000000",
                    "color": "#00000",
                    "icon": "<i class='bx bxl-tiktok'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.instagram.com/lpk.garuda.mestakung.indonesia?igsh=NXkxcDlwMWJrY3A4",
                    "title": "Instagram GMI",
                    "bgcolor": "#E1306C",
                    "color": "#ffffff",
                    "icon": "<i class='bx bxl-instagram'></i>",
                    "target": "_blank"
                },
                {
                    "url": "https://www.youtube.com/@LPKGARUDAMESTAKUNGINDONESIA",
                    "title": "YouTube GMI",
                    "bgcolor": "red",
                    "color": "white",
                    "icon": "<i class='fa fa-youtube'></i>",
                    "target": "_blank"
                }
            ]
            $('.kc_fab_wrapper').kc_fab(links);
        })
    </script>

    <script src="{{ asset('templates/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('templates/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('templates/assets/js/main.js') }}"></script>

</body>

</html>
