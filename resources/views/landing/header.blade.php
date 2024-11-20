<div class="container-xxl position-relative p-0" id="home">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-2 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!-- <h3 class="m-0">LPK GMI</h3> -->
            <img src="https://garudamestakungindonesia.my.id/templates/assets/img/GMI/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="fa fa-bars" style="color: white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#location" class="nav-item nav-link">Location</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our
                        Programs</a>
                    <div class="dropdown-menu m-0">
                        <a href="#" class="dropdown-item">Program GMI Korea</a>
                        <a href="#" class="dropdown-item">Program GMI Jepang</a>
                        <a href="#" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">LPK GMI</a>
        </div>
    </nav>

    <div class="container-xxl bg-primary hero-header">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6 text-center text-lg-start">
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
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <a href="https://maps.app.goo.gl/FaqwnyLMjym9c4N16" target="_blank">
                        <p style="color: white;text-align: left;" class="animated slideInDown"><i
                                class="fa fa fa-search text-white mb-2"
                                style="padding-right: 10px;"></i>Pangkah,
                            Kabupaten Tegal,
                            Central Java </p>
                    </a>
                    <h1 class="text-white mb-4 animated slideInDown">LPK GMI Jepang Centre</h1>

                    <p class="text-white pb-3 animated slideInDown" style="text-align: justify;">
                        LPK Garuda Mestakung Indonesia merupakan suatu lembaga pelatihan kerja di Wilayah jawa
                        Tengah, khususnya Kabupaten/Kota Tegal yang independen berdasarkan Akte Notaris No. 01
                        tanggal 18 Agustus 2023, yang beralamat di Jl. kaibon Rt. 03 Rw. 03 Desa Balamoa
                        kecamatan Pangkah Kabupaten Tegal.
                    </p>
                    <marquee style="color: white;padding-bottom: 10px;">Let's Join with LPK Garuda Mestakung Indonesia | Resmi &
                        Terpercaya | Terdapat Dana
                        Talangan | Proses
                        Transparan | Amanah
                    </marquee>
                    <a href="#" style="width: 100%;margin-top: 10px;"
                        class="btn btn-light py-sm-2 px-sm-3 rounded-pill animated slideInRight"><i
                            class="fa fa fa-info text-dark mb-2" style="padding-right: 5px;"></i> Daftar Program Jepang</a>
                </div>

            </div>
        </div>
    </div>
</div>
