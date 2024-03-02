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
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">lpkgarudamestakungindonesia@gmail.com</a></i>
                {{-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>082221108191</span></i> --}}
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://www.youtube.com/@LPKGARUDAMESTAKUNGINDONESIA" class="youtube"><i
                        class="bi bi-youtube"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.tiktok.com/@lpkgmi2023?_t=8kB6vVQYsoT&_r=1" class="tiktok"><i
                        class="bi bi-tiktok"></i></a>
                <a href="https://wa.me/6285643493825" class="whatsapp"><i class="bi bi-whatsapp"></i></i></a>
            </div>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center section-bg">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="#"><img src="{{ asset('templates/assets/img/GMI/logo.png') }}"
                        alt="" class="img-fluid" width="70px"><span>.</span></a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    {{-- <div class="section-title">
        <h3 style="padding-top: 50px;">Galeri <span>GMI</span></h3>
        <p>LPK Garuda Mestakung Indonesia Mencetak Calon Pekerja
            Migran Indonesia yang
            Unggul</p>
    </div> --}}


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

    <div class="kc_fab_wrapper"></div>

    @include('landing.footer')

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
                    "url": "https://wa.me/6285643493825",
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
