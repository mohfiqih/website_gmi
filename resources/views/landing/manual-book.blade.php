<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>LPK GMI JAPAN TEGAL</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="https://garudamestakungindonesia.my.id/img/logo-jepang-removebg.jpg" rel="icon">
  <link href="https://garudamestakungindonesia.my.id/img/logo-jepang-removebg.jpg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template_manual_book/assets/vendor/bootstrap/css/bootstrap.min.css?v=1.0') }}" rel="stylesheet">
  <link href="{{ asset('template_manual_book/assets/vendor/bootstrap-icons/bootstrap-icons.css?v=1.0') }}" rel="stylesheet">
  <link href="{{ asset('template_manual_book/assets/vendor/aos/aos.css?v=1.0') }}" rel="stylesheet">
  <link href="{{ asset('template_manual_book/assets/vendor/glightbox/css/glightbox.min.css?v=1.0') }}" rel="stylesheet">
  <link href="{{ asset('template_manual_book/assets/vendor/swiper/swiper-bundle.min.css?v=1.0') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template_manual_book/assets/css/main.css?v=1.0') }}" rel="stylesheet">

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

<body class="index-page">
  <header id="header" class="header fixed-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">garudamestakungindonesia@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>0823-2435-3371</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- <h1 class="sitename">Impact</h1> -->
           <a href="/">
            <img src="https://garudamestakungindonesia.my.id/img/logo-jepang-removebg.jpg" width="80" height="80" alt="">
           </a>
          <span>.</span>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2><span>Informasi LPK GMI JAPAN TEGAL</h2>
            <p class="text-justify">Informasi seputar LPK GMI JAPAN, Info Pendaftaran, Persyaratan, Job, Biaya dan Fasilitas. <b>Lokasi:</b> RT.03/RW.03, Kaibun, Balamoa, Kec. Pangkah, Kabupaten Tegal, Jawa Tengah 5247</p>
            <p>Klik Website LPK GMI : <a href="/">https://garudamestakungindonesia.my.id/</a></p>
            <div class="d-flex">
              <a target="_blank" href="{{ asset('book/manual_book_gmi.pdf') }}" class="btn-get-started">PDF Manual Book</a>
              <a href="https://garudamestakungindonesia.my.id/img/gmi.mp4" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch GMI</span></a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="https://garudamestakungindonesia.my.id/storage/images/1744968384_Manual%20Book%20Lpk%20Gmi%20Jepang%20(Tanpa%20WA).jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5" id="started">
            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="#persyaratan" class="stretched-link">PERSYARATAN</a></h4>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="#roadmap" class="stretched-link">ROADMAP GMI</a></h4>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="#infobiaya" class="stretched-link">INFO BIAYA</a></h4>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="#infobiaya" class="stretched-link">PEMBAYARAN</a></h4>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section" style="padding: 20px;">
      <div class="container" id="persyaratan">
        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>DIKLAT BAHASA JEPANG & BIMBINGAN KERJA DI JEPANG</h3>
            <p class="fst-italic">
                *) Gratis Biaya Pendaftaran (Free)
              </p>
            <img src="https://garudamestakungindonesia.my.id/storage/images/1744968384_Manual%20Book%20Lpk%20Gmi%20Jepang%20(Tanpa%20WA).jpg" class="img-fluid rounded-4 mb-4" alt="">
            <h3>SYARAT & KETENTUAN :</h3>
            <p style="text-align: justify;">
                LPK GARUDA MESTAKUNG INDONESIA merupakan suatu lembaga pelatihan kerja Jepang di Wilayah jawa Tengah, 
                khususnya Kabupaten/Kota Tegal yang independen berdasarkan Akte Notaris No. 01 tanggal 18 Agustus 2023, 
                yang beralamat di Jl. kaibon Rt. 03 Rw. 03 Desa Balamoa kecamatan Pangkah Kabupaten Tegal. 
                Dengan kewenangan utama melaksanakan pelatihan bahasa yang berbasis kompetensi dalam rangka tujuan untuk membantu mengentaskan kemiskinan dan pengangguran di wilayah Jawa Tengah.
            </p>
            <ul>
                <li><span>Laki-Laki & Perempuan</span></li>
                <li><span>Usia 18 - 28 Tahun</span></li>
                <li><span>KTP, KK, Akte Kelahiran</span></li>
                <li><span>Ijazah minimal SMA/SMK</span></li>
                <li><span>Sehat Jasmani & Rohani</span></li>
                <li><span>Tidak Bertato & Bertindik</span></li>
                <li><span>Bersedia mengikuti pelatihan</span></li>
                <li><span>
                    Bersedia mengikuti pelatihan Bahasa Jepang selama 4 Bulan
                </span></li>
            </ul>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <h3>INFORMASI JOB</h3>
              <p class="fst-italic">
                *) Program Magang Jepang & Tokutei Ginou (TG)
              </p>

              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Supermarket</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Pengolahan Makanan</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Kaigo (Perawat Lansia)</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Pertanian</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Peternakan</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Kontruksi</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Perikanan</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Perhotelan</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Otomotif</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Scafoldingg</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Manufaktur</span></li>
              </ul>

               <h5><b>CONTACT GMI</b></h5>
               <button class="btn btn-success">
                <a target="_blank" href="https://api.whatsapp.com/send/?phone=6282324353371&text&type=phone_number&app_absent=0" class="text-white">
                    <b>WhatsApp:</b> 0823-2435-3371 (Admin)
                </a>
               </button>

              <div class="position-relative mt-4">
                <img src="https://garudamestakungindonesia.my.id/storage/images/1732116084_IMG-20241120-WA0049.jpg" class="img-fluid rounded-4" alt="">
                <a href="https://garudamestakungindonesia.my.id/img/gmi.mp4" class="glightbox pulsating-play-btn mt-4"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="services section" style="padding: 20px;" id="roadmap">

      <div class="container section-title" data-aos="fade-up">
        <h2>ROADMAP GMI</h2>
        <p>Alur pendaftaran LPK GMI JAPAN - Sampai Kerja di Jepang</p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <h3>1. Pendaftaran</h3>
              <p>Calon siswa dapat
                melakukan pendaftaran
                ke kantor LPK, pendaftaran bisa
                dilakukan Offline/Online.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <h3>2. Diklat Bahasa Jepang</h3>
              <p>Pendidikan bahasa selama kurang lebih 4 bulan, sebelum melakukan interview job.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3>3. Interview Job</h3>
              <p>Setelah siswa mahir belajar
                bahasa, siswa dapat melakukan
                Interview Job sesuai yang diinginkan</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>4. Pemantapan</h3>
              <p>Siswa jika lolos Interview
                Job, akan melakukan
                Pemantapan</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <h3>5. Penerbangan</h3>
              <p>Tahap setelah selesai
                pemantapan, siswa akan
                terbang ke Jepang</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <h3>6. Bekerja di Jepang</h3>
              <p>Status bekerja di Jepang</p>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Informasi Biaya & Kontrak Kerja</h2>
      </div>

      <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Gaji & Kontrak Kerja</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4>15 - 20 Jt <span> / Bulan</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Gaji perbulan Rp. 15.000.000 - Rp. 20.000.000</span></li>
                <li><i class="bi bi-check"></i> <span>Kontrak kerja di jepang kurang lebih selama 3-5 Tahun.</span></li>
              </ul>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Biaya Pendidikan & Proses</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div><br/>
              <h4>Rp. 600k<span> / Bulan</span></h4>
              <h4>Rp. 800k<span> / Bulan</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>
                    Kelas Pagi 600/bulan (selama 4 Bulan) 
                    Jam Pendidikan 09.00 - 15.00 WIB</span>
                </li>
                <li><i class="bi bi-check"></i> <span>Kelas Malam 800/bulan (selama 4 Bulan) 
                    Jam Pendidikan 18.30 - 22.00 WIB</span>
                </li>
                <li><i class="bi bi-check"></i> <span>Kelas Full AC & Nyaman</span></li>
                <li><i class="bi bi-check"></i> <span>Pengajar Bersertifikat (exs. jepang, N1 & N2) </span></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Biaya Proses Job</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4>Administrasi</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>
                    Biaya Proses Rp. 35.000.000 - Rp. 55.000.000 (Administrasi)
                    </span>
                </li>
                <li><i class="bi bi-check"></i> <span>Dana Talangan dari Bank 80% (Jaminan)</span></li>
                <li><i class="bi bi-check"></i> <span>Biaya variatif untuk setiap job.</span></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="infobiaya" class="faq section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Bagaimana Cara </span><strong>Pembayaran?</strong></h3>
              <p>
                Berikut ini adalah contoh proses gambaran proses biaya job.
              </p>
              <center>
                <img width="350" height="350" src="https://cdn.rri.co.id/berita/Tarakan/o/1723158632701-Feb-Business_9/i9rke7dlwv1wbgw.jpeg" alt="">
              </center>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>Contoh Alur Pembiayaan Proses Job Order</span></h3>
                <div class="faq-content">
                  <p>
                    Contoh Biaya Job Total Rp. 45.000.000,- (Empat Puluh Lima Juta Rupiah)<br/>
                    <ul>
                        <li>
                            DP Rp. 10.000.000,- ketika akan Interview (Untuk proses dan pemantapan Bahasa)
                        </li>
                        <li>
                            Sisa Rp. 35.000.000,- pelunasan COE dan Visa turun. Surat kontrak kerja, tanda terima pembayaran administrasi akan disimpan oleh notaris.
                        </li>
                    </ul>
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item faq-active">
                <h3><span class="num">2.</span> <span><b>Fasilitas</b> apa yang didapatkan?</span></h3>
                <div class="faq-content">
                  <ul>
                    <li>
                        Asrama Laki-Laki & Perempuan terpisah fasilitas lengkap (GRATIS) 
                    </li>
                    <li>
                        Ruang belajar nyaman (Full AC) 
                    </li>
                    <li>
                        Pengajar bersertifikat (exs jepang, N1 & N2) 
                    </li>
                    <li>
                        Bimbingan sampai lolos interview job 
                    </li>
                    <li>
                        Tiap bulan banyak job turun 
                    </li>
                    <li>
                        Promo Gratis Biaya Pendaftaran (TERBATAS) 
                    </li>
                  </ul>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item faq-active">
                <h3><span class="num">3.</span> <span><b>Benefit</b> apa yang didapatkan?</span></h3>
                <div class="faq-content">
                  <ul>
                    <li>Bonus Bulanan</li>
                    <li>Bonus Tahunan</li>
                    <li>NENKIN/BPJS ±50Jt (cair ketika kontrak habis)</li>
                    <li>Tempat Tinggal dan makan gratis selama kerja</li>
                    <li>Mendapatkan uang saku ketika sampai di jepang</li>
                  </ul>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Faq Section -->

    <!-- Recent Posts Section -->
    <section class="recent-posts section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Galeri LPK GMI</h2>
      </div>

      <div class="container" data-aos="fade-up">
            <div class="row" id="galeri">
                @foreach ($images_db as $image)
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('storage/' . $image->filepath) }}"
                                    class="card-img-top lazyload" data-lity alt="Image"
                                    style="height: 100%; object-fit: cover;height: 300px;">
                            </div>
                            <div class="card-footer text-body-secondary">
                                <b>Date:</b> {{ $image->created_at }}<br />
                                {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                            </div>
                        </div><br/>
                    </div>
                @endforeach
            </div>
            <!-- Custom Pagination -->
            <div class="pagination-container" style="padding: 0px;">
                <ul class="pagination">
                    @if ($images_db->onFirstPage())
                        <li class="disabled"><span>&lt;</span></li>
                    @else
                        <li><a class="text-white" style="background-color: #046392"
                                href="{{ $images_db->previousPageUrl() }}#galeri" rel="prev">&lt;</a></li>
                    @endif

                    @foreach ($images_db->links()->elements[0] as $page => $url)
                        @if ($page == $images_db->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}#galeri">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    @if ($images_db->hasMorePages())
                        <li><a class="text-white" style="background-color: #046392"
                                href="{{ $images_db->nextPageUrl() }}#galeri" rel="next">&gt;</a></li>
                    @else
                        <li class="disabled"><span>&gt;</span></li>
                    @endif
                </ul>
            </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">LPK GMI JAPAN</span>
          </a>
          <p style="text-align: justify;">
            LPK GMI (Garuda Mestakung Indonesia) memberikan kesempatan bagi anda yang ingin bekerja di luar negeri khususnya di Jepang. LPK GMI telah membimbing dan membina banyak anak hingga berangkat bekerja di Luar Negeri khususnya Negara Jepang. 
            LPK GMI memiliki program diantaranya Program Magang, Program Tokutei Ginou dan Matching Job, LPK GMI memiliki banyak Job dari berbagai sektor kerja di Jepang.
          </p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links text-center text-md-start">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            LPK GMI Japan Tegal RT.03/RW.03, Kaibun, Balamoa, Kec. Pangkah, Kabupaten Tegal, Jawa Tengah 5247.
          </p>
          <p class="mt-4"><strong>WhatsApp:</strong> <span>0823-2435-3371</span></p>
          <p><strong>Email:</strong> <span>garudamestakungindonesia@gmail.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">LPK GMI JAPAN</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template_manual_book/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template_manual_book/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('template_manual_book/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template_manual_book/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template_manual_book/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template_manual_book/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('template_manual_book/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('template_manual_book/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('template_manual_book/assets/js/main.js') }}"></script>

</body>

</html>