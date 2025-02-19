<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LPK GMI Japan Tegal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{ asset('img/logo-jepang-removebg.jpg') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/bootstrap.min.css?v=1.0') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/style.css?v=1.0') }}" rel="stylesheet">
    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">
    <style>
        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 10px 15px;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            gap: 5px;
            flex-wrap: wrap;
        }

        .pagination li {
            display: inline-block;
        }

        .pagination li a,
        .pagination li span {
            display: inline-block;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            border: 1px solid #046392;
            background-color: white;
            color: #046392;
            font-weight: bold;
        }

        .pagination li a:hover {
            background-color: #046392;
            color: white;
        }

        .pagination li.active span {
            background-color: #046392;
            color: white;
        }

        .pagination li.disabled span {
            opacity: 0.5;
            cursor: not-allowed;
        }

        @media (max-width: 768px) {
            .pagination-container {
                padding: 10px;
                width: 100%;
                justify-content: center;
            }

            .pagination {
                flex-wrap: wrap;
                justify-content: center;
            }

            .pagination li a,
            .pagination li span {
                padding: 6px 10px;
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="container-xxl position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="img/logo-jepang-removebg.jpg" alt="Logo" width="100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars" style="color: white;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#location" class="nav-item nav-link">Location</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                Program GMI
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Program Magang Jepang</a>
                                <a href="#" class="dropdown-item">Program Tokutei Ginou (TG)</a>
                            </div>
                        </div>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">LPK GMI Jepang</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/sarpras5.jpg') }}" class="d-block w-100" alt="..."
                                            style="border-radius: 10px;width: 300px;" data-lity>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('templates/assets/img/GMI/14.jpg') }}" class="d-block w-100"
                                         style="border-radius: 10px;width: 370px;" data-lity>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('templates/assets/img/GMI/12.jpg') }}" class="d-block w-100"
                                         style="border-radius: 10px;width: 300px;" data-lity>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('templates/assets/img/GMI/13.jpg') }}"
                                            class="d-block w-100"
                                            style="border-radius: 10px;width: 300px;" data-lity>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <p class="justify-content-center text-white">
                                Welcome to LPK GMI Jepang - Tegal 👋
                            </p>
                            
                            <h2 class="text-white mb-4 animated slideInDown">LPK Garuda Mestakung Indonesia (GMI)</h2>

                            <a href="https://maps.app.goo.gl/FaqwnyLMjym9c4N16" target="_blank">
                                <p style="color: white;text-align: left;" class="animated slideInDown"><i
                                        class="fa fa fa-search text-white mb-2"
                                        style="padding-right: 10px;"></i>Balamoa,
                                    Kabupaten Tegal,
                                    Central Java </p>
                            </a>

                            <p class="text-white pb-1 animated slideInDown" style="text-align: justify;">
                                LPK GMI (Garuda Mestakung Indonesia) memberikan kesempatan bagi anda yang ingin bekerja
                                di luar negeri khususnya di Jepang. LPK GMI telah
                                membimbing dan
                                membina banyak anak hingga berangkat bekerja di Luar Negeri khususnya Negara Jepang. LPK GMI memiliki program diantaranya
                                Program Magang, Program Tokutei Ginou dan Matching Job, LPK GMI memiliki banyak Job dari berbagai sektor kerja di Jepang.
                            </p>
                            <p class="text-white">
                                Let's Join with LPK Garuda Mestakung
                                Indonesia | Resmi &
                                Terpercaya | Terdapat Dana
                                Talangan | Proses
                                Transparan | Amanah
                            </p>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <marquee scrollamount="10"><b>Announcement!</b> LPK Garuda Mestakung Indonesia (GMI) tidak membuka
                                    cabang diwilayah
                                    <b>Kota Tegal/sekitarnya!</b> apabila ada lembaga atau perorangan mengatasnamakan kami mohon
                                    diklarifikasikan terlebih dahulu kepada kami, dan kami tidak bertanggung jawab apabila ada
                                    oknum yang mengaku cabang kami! Terimakasih
                                </marquee>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <a target="_blank" href="https://forms.gle/hcRxJmkEWH9X7qkz6">
                                        <button class="btn btn-secondary" style="width: 100%;">
                                            <i class="bi bi-book" style="margin-right: 5px;"></i> Daftar Online
                                        </button>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="https://forms.gle/hcRxJmkEWH9X7qkz6">
                                        <button class="btn btn-secondary" style="width: 100%;">
                                            <i class="bi bi-instagram" style="margin-right: 5px;"></i> Instagram
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br/><br/>

        <div class="container-xxl py-2">
            <div class="container py-2 px-lg-5">
                <div class="row g-4">
                    <p class="section-title text-secondary">Program LPK GMI<span></span></p>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item rounded text-center p-4"
                            style="background-color: #093d91;color: white;">
                            <i class="fa fa-3x fa-book text-white mb-4"></i>
                            <h5 class="mb-3" style="color: white">Program GMI Jepang</h5>
                            <a href="{{ url('program-jepang') }}">
                                <p class="m-0" style="color: white">Program Magang | Dana Talangan | Proses
                                    Transparan | Terpercaya & Amanah
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item rounded text-center p-4"
                            style="background-color: #093d91;color: white;">
                            <i class="fa fa-3x fa-book text-white mb-4"></i>
                            <h5 class="mb-3" style="color: white">Program TG Jepang</h5>
                            <a href="{{ url('program-jepang') }}">
                                <p class="m-0" style="color: white">Program TG Jepang | Dana Talangan | Proses
                                    Transparan | Terpercaya & Amanah
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br/><br/>

        <div class="container-xxl py-2" id="about">
            <div class="container py-2 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-2">#1 LPK Garuda Mestakung Indonesia</h1>
                        <div class="alert" role="alert" style="background-color: #093d91;color: white;">
                            <marquee>Bahasa Adalah Jendela Untuk Melihat Dunia Lebih Luas</marquee>
                        </div>
                        <p class="mb-2" style="text-align: justify;"><b>LPK GARUDA MESTAKUNG INDONESIA</b> merupakan
                            suatu
                            lembaga pelatihan kerja Jepang di
                            Wilayah jawa Tengah, khususnya Kabupaten/Kota Tegal yang independen berdasarkan Akte Notaris
                            No. 01 tanggal 18 Agustus 2023, yang beralamat di Jl. kaibon Rt. 03 Rw. 03 Desa Balamoa
                            kecamatan Pangkah Kabupaten Tegal. Dengan kewenangan utama melaksanakan pelatihan bahasa
                            yang berbasis kompetensi dalam rangka tujuan untuk membantu mengentaskan kemiskinan dan
                            pengangguran di wilayah Jawa Tengah
                        </p><br />
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-6" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalSarpras"><button
                                        type="button" class="btn btn-primary text-white"
                                        style="width: 100%;text-align: left;height: 50px;"><b><i
                                                class="bi bi-building" style="padding-right: 10px;"></i>
                                            Sarana & Prasarana LPK GMI</b></button></a>
                            </div>
                            <div class="col-md-6" style="padding-bottom: 10px;">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <button type="button" class="btn btn-primary text-white"
                                        style="width: 100%;text-align: left;height: 50px;"><b><i class="fa fa-sitemap"
                                                style="padding-right: 10px;"></i>
                                            Struktur Organisasi LPK GMI</b>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Pelayanan Ramah</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Pendidikan</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Kenyamanan</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Proses Transparan</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Amanah</p>
                                <p class="mb-2">100%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <br />
                        <div class="row" style="padding-bottom: 10px;">
                            <div class="col-md-12" style="padding-bottom: 10px;">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalKelebihan">
                                            <div class="icon-box">
                                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                                <h4>Kelebihan LPK GMI</h4>
                                                <div class="col-md-12">
                                                    <p class="text-black">
                                                        <i class="fa fa-check"></i> Pelatihan Bahasa Jepang Dari Awal
                                                    </p>
                                                    <p class="text-black">
                                                        <i class="fa fa-check"></i> Bimbingan Dari Awal Hingga Keberangkatan
                                                    </p>
                                                    <p class="text-black">
                                                        <i class="fa fa-check"></i> Kesempatan Bekerja di Jepang (Magang atau TG)
                                                    </p>
                                                    <p class="text-black">
                                                        <i class="fa fa-check"></i> Pengalaman Tinggal di Jepang
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
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
                                        alt="..." style="border-radius: 10px;" data-lity>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('templates/assets/img/GMI/12.jpg') }}" class="d-block w-100"
                                        alt="..." style="border-radius: 10px;" data-lity>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('templates/assets/img/GMI/gmi1.png') }}" class="d-block w-100"
                                        alt="..." style="border-radius: 10px;" data-lity>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('sarpras5.jpg') }}" class="d-block w-100" alt="..."
                                        style="border-radius: 10px;" data-lity>
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
                        </div><br />

                        <img src="{{ asset('img/sarpras5.jpg') }}" class="img-fluid" alt=""
                            style="border-radius: 10px;" data-lity>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 px-lg-5" style="padding-right: 30px;padding-left: 30px;">
            <p class="section-title text-secondary justify-content-center">
                <span></span>Bussiness LPK GMI<span></span>
            </p>
            <div class="card">
                <div class='sk-ww-google-business-profile' data-embed-id='25374831'></div>
                <script src='https://widgets.sociablekit.com/google-business-profile/widget.js' async defer></script>
            </div>
        </div>

        <div class="container-xxl position-relative p-0" id="home">
            <div class="container" data-aos="fade-up">
                <center>
                    <h2>Galeri GMI</h2>
                </center><br/>
                <div class="row" style="padding-right: 30px;padding-left: 30px;">
                    @foreach ($images_db as $image)
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('storage/' . $image->filepath) }}" class="card-img-top lazyload" data-lity alt="Image" style="height: 100%; object-fit: cover;height: 300px;">
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <b>Date:</b> {{ $image->created_at }}<br/>
                                    {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Custom Pagination -->
                <div class="pagination-container" style="padding: 0px;">
                    <ul class="pagination">
                        @if ($images_db->onFirstPage())
                            <li class="disabled"><span>&lt;</span></li>
                        @else
                            <li><a class="text-white" style="background-color: #046392" href="{{ $images_db->previousPageUrl() }}#galeri" rel="prev">&lt;</a></li>
                        @endif
                
                        @foreach ($images_db->links()->elements[0] as $page => $url)
                            @if ($page == $images_db->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}#galeri">{{ $page }}</a></li>
                            @endif
                        @endforeach
                
                        @if ($images_db->hasMorePages())
                            <li><a class="text-white" style="background-color: #046392" href="{{ $images_db->nextPageUrl() }}#galeri" rel="next">&gt;</a></li>
                        @else
                            <li class="disabled"><span>&gt;</span></li>
                        @endif
                    </ul>
                </div>   
            </div>
        </div>

        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">500</h1>
                        <p class="text-white mb-0">Happy Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-calendar fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">3</h1>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">25</h1>
                        <p class="text-white mb-0">Karyawan</p>
                    </div>

                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-plane fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">200</h1>
                        <p class="text-white mb-0">Penerbangan</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->

        <!-- Service Start -->
        <div class="container-xxl py-2" id="service">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our
                        Services<span></span></p>
                    <h1 class="text-center mb-5">Program LPK GMI</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Program GMI TG Jepang</h5>
                            <p class="m-0">Program TG Jepang | Dana Talangan
                                |
                                Proses Transparan | Terpercaya & Amanah <br /> Klik More Info</p>
                            <a class="btn btn-square" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Program GMI Jepang</h5>
                            <p class="m-0">Program Magang Jepang | Dana Talangan | Proses Transparan | Terpercaya &
                                Amanah</p>
                            <a class="btn btn-square" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-info fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Dana Talangan</h5>
                            <p class="m-0">LPK Garuda Mestakung Indonesia (GMI) menyediakan Dana Talangan bagi yang
                                mendaftar</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Resmi dan Terpercaya</h5>
                            <p class="m-0">LPK Garuda Mestakung Indonesia (GMI) sudah resmi, berpengalaman,
                                dan terpercaya</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-book fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Proses Transparan</h5>
                            <p class="m-0">LPK Garuda Mestakung Indonesia (GMI) mengutamakan transparan dalam proses
                            </p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter py-2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span>About GMI<span></span>
                        </p>
                        <h1 class="text-center text-white mb-4">Stay Always In LPK GMI</h1>
                        <p class="text-white mb-4" style="text-align: center">LPK Garuda Mestakung Indonesia (GMI)
                            Mencetak
                            Calon Pekerja Migran Indonesia yang Unggul, Pelatihan Bahasa Jepang dan Program Magang dan Tokutei Ginou (TG)
                            dari Awal Hingga Mendapatkan Job</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                                placeholder="Email: lpkgarudamestakungindonesia@gmail.com" style="height: 48px;"
                                readonly>
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                    class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our
                        Galeri GMI<span></span></p>
                    <h1 class="text-center mb-5">Galeri LPK GMI</h1>
                </div>
                <div class="row" style="padding-right: 30px;padding-left: 30px;">
                    @foreach ($images as $index => $image)
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{ asset('templates/assets/img/GMI/' . ($index + 1) . '.jpg') }}" class="card-img-top lazyload" data-lity alt="Image" style="height: 100%; object-fit: cover;height: 300px;">
                                </div>
                                <div class="card-footer text-body-secondary">
                                    <b>LPK GMI Japan</b>
                                </div>
                            </div><br/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Projects End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span>
                </p>
                <h1 class="text-center mb-5">What Say Our Clients!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Buat Kalian
                            yang ingin job Fishing Korea saya rekomendasi untuk Lpk Garuda Mestakung Indonesia</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-4">
                                <h5 class="mb-1">Client GMI</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Kantor
                            terpercaya megah mewah dan bekerja sama dgn agncy yg terbukti</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-4">
                                <h5 class="mb-1">Client GMI</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>LPK terpercaya
                            amanah, bangunanny puny sendiri, prosesnya cepat dan transparan.</p>
                        <div class="d-flex align-items-center">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <div class="container">
            <div class='sk-ww-google-reviews' data-embed-id='25368619'></div>
            <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
        </div>


        <div class="container py-2" id="location" style="padding-right: 30px;padding-left: 30px;">
            <h5>1. Lokasi LPK GMI Jepang</h5>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.929751248736!2d109.1843675!3d-6.9522777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbfe260681b91%3A0x122ab99fb2d88a7!2sLpk%20Garuda%20Mestakung%20Indonesia!5e0!3m2!1sid!2sid!4v1708396367934!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        @include('landing.footer')

        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i
                class="bi bi-arrow-up"></i></a>

        <div class="zoom">
            <a class="zoom-fab zoom-btn-large bg-success" id="zoomBtn"><i class="fa fa-whatsapp"></i></a>
            <ul class="zoom-menu">
                <li>
                    <a target="_blank" href="https://wa.me/6282324353371"
                        class="zoom-fab zoom-btn-sm zoom-btn-person scale-transition scale-out bg-success"><i
                            class="fa fa-whatsapp" style="margin-top: 5px;">
                        </i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/lpk.gmijapanofficial?igsh=MXVyempkOTIxeWRiMQ=="
                        class="zoom-fab zoom-btn-sm zoom-btn-doc scale-transition scale-out"><i
                            class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://www.youtube.com/@LPKGARUDAMESTAKUNGINDONESIA"
                        class="zoom-fab zoom-btn-sm zoom-btn-tangram scale-transition scale-out"><i
                            class="fa fa-youtube"></i></a>
                </li>
                <li>
                    <a target="_blank" href="https://www.tiktok.com/@lpk.gmijapantegal?_t=ZS-8u2sgx8yiAq&_r=1"
                        class="zoom-fab zoom-btn-sm zoom-btn-report scale-transition scale-out" alt="Tiktok">
                        <i class="fa fa-music"></i></a>
                </li>
            </ul>
        </div>
    </div>

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
        <div class="modal-dialog modal-lg">
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
                            <img src="{{ asset('img/sarpras4.jpg') }}" class="img-fluid rounded-4" alt="">
                            <img src="{{ asset('img/sarpras5.jpg') }}" class="img-fluid rounded-4" alt="">
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
    {{-- <div class="modal fade" id="modalKelebihan" tabindex="-1" aria-labelledby="modalKelebihan" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalKelebihan">Kelebihan LPK GMI Jepang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <i class="fa fa-check"></i> Pelatihan Bahasa Jepang Dari Awal
                            </p>
                            <p>
                                <i class="fa fa-check"></i> Bimbingan Dari Awal Hingga Keberangkatan
                            </p>
                            <p>
                                <i class="fa fa-check"></i> Kesempatan Bekerja di Jepang (Magang atau TG)
                            </p>
                            <p>
                                <i class="fa fa-check"></i> Pengalaman Tinggal di Jepang
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- JavaScript --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(["_setAccount", "UA-36251023-1"]);
        _gaq.push(["_setDomainName", "jqueryscript.net"]);
        _gaq.push(["_trackPageview"]);

        (function() {
            var ga = document.createElement("script");
            ga.type = "text/javascript";
            ga.async = true;
            ga.src =
                ("https:" == document.location.protocol ?
                    "https://ssl" :
                    "http://www") + ".google-analytics.com/ga.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <script>
        $('#zoomBtn').click(function() {
            $('.zoom-btn-sm').toggleClass('scale-out');
            if (!$('.zoom-card').hasClass('scale-out')) {
                $('.zoom-card').toggleClass('scale-out');
            }
        });

        $('.zoom-btn-sm').click(function() {
            var btn = $(this);
            var card = $('.zoom-card');

            if ($('.zoom-card').hasClass('scale-out')) {
                $('.zoom-card').toggleClass('scale-out');
            }
            if (btn.hasClass('zoom-btn-person')) {
                card.css('background-color', '#d32f2f');
            } else if (btn.hasClass('zoom-btn-doc')) {
                card.css('background-color', '#fbc02d');
            } else if (btn.hasClass('zoom-btn-tangram')) {
                card.css('background-color', '#388e3c');
            } else if (btn.hasClass('zoom-btn-report')) {
                card.css('background-color', '#1976d2');
            } else {
                card.css('background-color', '#7b1fa2');
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
    <!-- Lity JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"></script>
</body>

</html>
