<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LPK GMI JAPAN TEGAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="{{ asset('img/logo-jepang-removebg.jpg') }}" rel="icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/bootstrap.min.css?v=1.0') }}" rel="stylesheet">
    <link href="{{ asset('landing/css/style.css?v=1.0') }}" rel="stylesheet">

    <!-- Lity CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

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
            border: 1px solid #093d91;
            background-color: white;
            color: #093d91;
            font-weight: bold;
        }

        .pagination li a:hover {
            background-color: #093d91;
            color: white;
        }

        .pagination li.active span {
            background-color: #093d91;
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

    <style>
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            min-width: 1000px;
            /* paksa tabel melebar */
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 12px 16px;
            border: 1px solid #ddd;
            text-align: left;
            white-space: nowrap;
            /* biar isi gak turun ke bawah */
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>

</head>

<body>
    <div class="container-xxl bg-white p-0">
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
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                Program LPK GMI
                            </a>
                            <div class="dropdown-menu m-0">
                                <a class="dropdown-item">Program Magang Jepang</a>
                                <a class="dropdown-item">Program Tokutei Ginou (TG)</a>
                                <a class="dropdown-item">Matching Job</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                Social Media
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="https://www.instagram.com/lpk.gmijapanofficial?igsh=MXVyempkOTIxeWRiMQ=="
                                    class="dropdown-item" target="_blank">
                                    Instagram
                                </a>
                                <a href="https://wa.me/6282324353371" class="dropdown-item" target="_blank">
                                    WhatsApp
                                </a>
                                <a href="https://www.tiktok.com/@lpk.gmijapantegal?_t=ZS-8u2sgx8yiAq&_r=1"
                                    class="dropdown-item" target="_blank">
                                    Tiktok
                                </a>
                            </div>
                        </div>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://garudamestakungindonesia.my.id/storage/images/1732115655_IMG-20241120-WA0053.jpg"
                                            class="d-block w-100" alt="..."
                                            style="border-radius: 10px;width: 300px;" data-lity>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://garudamestakungindonesia.my.id/storage/images/1732115655_IMG-20241120-WA0052.jpg"
                                            class="d-block w-100" style="border-radius: 10px;width: 370px;" data-lity>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://garudamestakungindonesia.my.id/storage/images/1732115655_IMG-20241120-WA0054.jpg"
                                            class="d-block w-100" style="border-radius: 10px;width: 300px;" data-lity>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('templates/assets/img/GMI/13.jpg') }}" class="d-block w-100"
                                            style="border-radius: 10px;width: 300px;" data-lity>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start mr-2 ml-2">
                            <p class="justify-content-center text-white">
                                Welcome to Data Pendaftaran LPK GMI Japan 👋
                            </p>
                            <h2 class="text-white mb-4 animated slideInDown">
                                DATA PENDAFTARAN SISWA BARU (CV) LPK GMI JAPAN TEGAL
                            </h2>
                            <ul>
                                <li class="text-white pb-1 animated slideInDown" style="text-align: justify;">
                                    LPK GMI Japan Lokasi: RT.03/RW.03, Kaibun, Balamoa, Kec. Pangkah, Kabupaten Tegal,
                                    Jawa
                                    Tengah 5247
                                </li>
                                <li class="text-white pb-1 animated slideInDown" style="text-align: justify;">
                                    LPK GMI JAPAN lembaga Resmi, Amanah dan Legal.
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="/">
                                        <button class="btn btn-warning" style="width: 100%;height: 50px;">
                                            <i class="bi bi-book" style="margin-right: 5px;"></i>
                                            <b>Website LPK GMI</b>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br /><br />

        {{-- <div class="container-xxl py-2 table-wrapper">
            <div class="card">
                <div class="card-body" style="padding: 30px; border-radius: 10px;">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label>
                                Show
                                <select id="entriesSelect" class="form-control d-inline-block w-auto">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20" selected>20</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                            </label>
                        </div>
                        <div>
                            <input type="text" id="tableSearch" class="form-control" placeholder="Search...">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div id="refreshIndicator"
                            style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                            🔄 Refreshing data...
                        </div>
                        <br />
                        <div class="table-responsive">
                            <table id="spreadsheetTable"
                                class="table table-striped table-bordered fixed-header-table">
                                @if (!empty($cleanedData))
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Download CV</th>
                                            <th>Tanggal</th>
                                            <th>Email</th>
                                            <th>Nama Jepang (Katakana)</th>
                                            <th>Nama Lengkap (Indonesia)</th>
                                            <th>Alamat Lengkap</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Usia</th>
                                            <th>Kelamin</th>
                                            <th>No HP Aktif</th>
                                            <th>Agama</th>
                                            <th>Tinggi (cm)</th>
                                            <th>Berat (kg)</th>
                                            <th>Gol Darah</th>
                                            <th>Buta Warna</th>
                                            <th>Mata Kiri</th>
                                            <th>Mata Kanan</th>
                                            <th>Pernah Operasi</th>
                                            <th>Apakah Sedang Minum</th>
                                            <th>Tangan</th>
                                            <th>Merokok</th>
                                            <th>Penyakit Dalam</th>
                                            <th>Keahlian</th>
                                            <th>Sifat/Kepribadian</th>
                                            <th>Kelebihan</th>
                                            <th>Kelemahan</th>
                                            <th>Status</th>
                                            <th>Hobi</th>
                                            <th>Motivasi</th>
                                            <th>Rencana Menabung</th>
                                            <th>Rencana Setelah Jepang</th>
                                            <th>Pernah Tinggal/Bekerja di Jepang</th>
                                            <th>Kualifikasi Lamaran</th>
                                            <th>Nama SD</th>
                                            <th>Tahun Masuk SD</th>
                                            <th>Tahun Keluar SD</th>
                                            <th>Nama SMP</th>
                                            <th>Tahun Masuk SMP</th>
                                            <th>Tahun Keluar SMP</th>
                                            <th>Nama SMA/SMK</th>
                                            <th>Tahun Masuk SMA/SMK</th>
                                            <th>Tahun Keluar SMA/SMK</th>
                                            <th>Jurusan SMA/SMK</th>
                                            <th>Perguruan Tinggi</th>
                                            <th>Pengalaman Kerja</th>
                                            <th>Bahasa Asing</th>
                                            <th>Pernah ke Jepang</th>
                                            <th>Tanggal ke Jepang</th>
                                            <th>Luar Negeri Lainnya</th>
                                            <th>Negara</th>
                                            <th>Kerabat di Jepang</th>
                                            <th>Hubungan Kerabat</th>
                                            <th>Belajar Bahasa</th>
                                            <th>Buku yang Dipakai</th>
                                            <th>Bab yang Dipelajari</th>
                                            <th>Nama Ayah</th>
                                            <th>Hubungan</th>
                                            <th>Usia Ayah</th>
                                            <th>Pekerjaan Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Hubungan</th>
                                            <th>Usia Ibu</th>
                                            <th>Pekerjaan Ibu</th>
                                            <th>Nama Saudara</th>
                                            <th>Pendapat Keluarga</th>
                                            <th>No HP Keluarga</th>
                                            <th>Nama Mentor</th>
                                            <th>Ukuran Baju</th>
                                            <th>Nomor Sepatu</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        @include('partials.table_body')
                                    </tbody>
                                @else
                                    <tr>
                                        <td colspan="100%" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>

                    <!-- Pagination di luar DataTables -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span id="tableInfo"></span>

                        <div class="d-flex align-items-center ms-auto">
                            <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- Data Pendaftaran --}}
        <div class="container mt-4">
            <div class="card">
                <div class="card-body" style="padding: 20px; border-radius: 10px;">
                    {{-- <div class="d-flex justify-content-between mb-3">
                        <div>
                            <label>
                                Show 
                                <select id="entriesSelect" class="form-control d-inline-block w-auto">
                                    <option value="5">5</option>
                                    <option value="10" selected>10</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                            </label>
                        </div>
                        <div>
                            <input type="text" id="tableSearch" class="form-control" placeholder="Search...">
                        </div>
                    </div> --}}

                    {{-- <form action="{{ route('data-pendaftaran.export-pdf') }}" method="GET"
                        class="d-flex align-items-center mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <label><b>Dari Tanggal</b></label>
                                <input type="date" name="start_date" class="form-control me-2 mb-2" required>
                                <label><b>Sampai Tanggal</b></label>
                                <input type="date" name="end_date" class="form-control me-2 mb-2" required>
                            </div>
                            <div class="col md-12">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-download"></i> Export PDF
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    {{-- <div class="table-responsive">
                        <div id="refreshIndicator" style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
                            🔄 Refreshing data...
                        </div>
                        <br/>
                        <table id="mentorDataTable" class="table table-striped table-bordered fixed-header-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Download CV</th>
                                    <th>Timestamp</th>
                                    <th>EMAIL</th>
                                    <th>NAMA (KATAKANA)</th>
                                    <th>NAMA (INDONESIA)</th>
                                    <th>ALAMAT</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>USIA</th>
                                    <th>KELAMIN</th>
                                    <th>NO HP AKTIF</th>
                                    <th>AGAMA</th>
                                    <th>TINGGI</th>
                                    <th>BERAT</th>
                                    <th>GOL DARAH</th>
                                    <th>BUTA WARNA</th>
                                    <th>MATA KIRI</th>
                                    <th>MATA KANAN</th>
                                    <th>PERNAH OPERASI</th>
                                    <th>APAKAH SEDANG MINUM</th>
                                    <th>TANGAN</th>
                                    <th>MEROKOK</th>
                                    <th>PENYAKIT DALAM</th>
                                    <th>KEAHLIAN</th>
                                    <th>SIFAT/KEPRIBADIAN</th>
                                    <th>KELEBIHAN</th>
                                    <th>KELEMAHAN</th>
                                    <th>STATUS</th>
                                    <th>HOBI</th>
                                    <th>MOTIVASI</th>
                                    <th>SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA</th>
                                    <th>SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN</th>
                                    <th>APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG</th>
                                    <th>JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR</th>
                                    <th>SEKOLAH DASAR (SD)</th>
                                    <th>TAHUN MASUK SEKOLAH (SD)</th>
                                    <th>TAHUN KELUAR SEKOLAH (SD)</th>
                                    <th>SEKOLAH MENENGAH PERTAMA (SMP)</th>
                                    <th>TAHUN MASUK SEKOLAH (SMP)</th>
                                    <th>TAHUN KELUAR SEKOLAH (SMP)</th>
                                    <th>SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)</th>
                                    <th>TAHUN MASUK SEKOLAH (SMA/SMK)</th>
                                    <th>TAHUN KELUAR SEKOLAH (SMA/SMK)</th>
                                    <th>JURUSAN (SMA/SMK)</th>
                                    <th>PERGURUAN TINGGI</th>
                                    <th>PENGALAMAN KERJA</th>
                                    <th>BAHASA ASING YANG DIKUASAI</th>
                                    <th>PERNAH KE JEPANG</th>
                                    <th>JIKA YA, SEBUTKAN TGL/BLN/THN</th>
                                    <th>PERNAH LUAR NEGERI LAINNYA</th>
                                    <th>JIKA YA, NEGARA APA</th>
                                    <th>APAKAH ADA KERABAT DI JEPANG</th>
                                    <th>APA HUBUNGAN KERABAT YANG DI JEPANG</th>
                                    <th>BELAJAR BAHASA</th>
                                    <th>BUKU YANG DI PAKAI</th>
                                    <th>BAB YANG DI PELAJARI</th>
                                    <th>NAMA AYAH</th>
                                    <th>HUBUNGAN AYAH</th>
                                    <th>USIA AYAH</th>
                                    <th>PEKERJAAN AYAH</th>
                                    <th>NAMA IBU</th>
                                    <th>HUBUNGAN IBU</th>
                                    <th>USIA IBU</th>
                                    <th>PEKERJAAN IBU</th>
                                    <th>NAMA SAUDARA</th>
                                    <th>PENDAPAT KELUARGA</th>
                                    <th>NO HP KELUARGA</th>
                                    <th>NAMA MENTOR</th>
                                    <th>UKURAN BAJU</th>
                                    <th>NOMOR SEPATU</th>
                                    <th>ID</th>
                                    <th>PILIH PROGRAM</th>
                                    <th>PILIH KELAS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td colspan="74" class="text-center">Sedang proses menampilkan data...</td></tr>
                            </tbody>
                        </table>
                    </div> --}}

                    <div class="table-responsive">
    <div id="refreshIndicator" style="display: none; font-size: 15px; color: #888; margin-right: 10px;">
        🔄 Refreshing data...
    </div>
    <br/>
    <table id="mentorDataTable" class="table table-striped table-bordered fixed-header-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Download CV</th>
                <th>Timestamp</th>
                <th>EMAIL</th>
                <th>NAMA (KATAKANA)</th>
                <th>NAMA (INDONESIA)</th>
                <th>ALAMAT</th>
                <th>TANGGAL LAHIR</th>
                <th>USIA</th>
                <th>KELAMIN</th>
                <th>NO HP AKTIF</th>
                <th>AGAMA</th>
                <th>TINGGI</th>
                <th>BERAT</th>
                <th>GOL DARAH</th>
                <th>BUTA WARNA</th>
                <th>MATA KIRI</th>
                <th>MATA KANAN</th>
                <th>PERNAH OPERASI</th>
                <th>APAKAH SEDANG MINUM</th>
                <th>TANGAN</th>
                <th>MEROKOK</th>
                <th>PENYAKIT DALAM</th>
                <th>KEAHLIAN</th>
                <th>SIFAT/KEPRIBADIAN</th>
                <th>KELEBIHAN</th>
                <th>KELEMAHAN</th>
                <th>STATUS</th>
                <th>HOBI</th>
                <th>MOTIVASI</th>
                <th>SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA</th>
                <th>SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN</th>
                <th>APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG</th>
                <th>JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR</th>
                <th>SEKOLAH DASAR (SD)</th>
                <th>TAHUN MASUK SEKOLAH (SD)</th>
                <th>TAHUN KELUAR SEKOLAH (SD)</th>
                <th>SEKOLAH MENENGAH PERTAMA (SMP)</th>
                <th>TAHUN MASUK SEKOLAH (SMP)</th>
                <th>TAHUN KELUAR SEKOLAH (SMP)</th>
                <th>SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)</th>
                <th>TAHUN MASUK SEKOLAH (SMA/SMK)</th>
                <th>TAHUN KELUAR SEKOLAH (SMA/SMK)</th>
                <th>JURUSAN (SMA/SMK)</th>
                <th>PERGURUAN TINGGI</th>
                <th>PENGALAMAN KERJA</th>
                <th>BAHASA ASING YANG DIKUASAI</th>
                <th>PERNAH KE JEPANG</th>
                <th>JIKA YA, SEBUTKAN TGL/BLN/THN</th>
                <th>PERNAH LUAR NEGERI LAINNYA</th>
                <th>JIKA YA, NEGARA APA</th>
                <th>APAKAH ADA KERABAT DI JEPANG</th>
                <th>APA HUBUNGAN KERABAT YANG DI JEPANG</th>
                <th>BELAJAR BAHASA</th>
                <th>BUKU YANG DI PAKAI</th>
                <th>BAB YANG DI PELAJARI</th>
                <th>NAMA AYAH</th>
                <th>HUBUNGAN AYAH</th>
                <th>USIA AYAH</th>
                <th>PEKERJAAN AYAH</th>
                <th>NAMA IBU</th>
                <th>HUBUNGAN IBU</th>
                <th>USIA IBU</th>
                <th>PEKERJAAN IBU</th>
                <th>NAMA SAUDARA</th>
                <th>PENDAPAT KELUARGA</th>
                <th>NO HP KELUARGA</th>
                <th>NAMA MENTOR</th>
                <th>UKURAN BAJU</th>
                <th>NOMOR SEPATU</th>
                <th>ID</th>
                <th>PILIH PROGRAM</th>
                <th>PILIH KELAS</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="74" class="text-center">Sedang proses menampilkan data...</td></tr>
        </tbody>
    </table>
</div>

                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <span id="tableInfo"></span>
                        <div class="d-flex align-items-center ms-auto">
                            <ul class="pagination pagination-sm mb-0" id="paginationControls"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('landing.footer')

        <a class="btn btn-lg btn-secondary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up">
            </i>
        </a>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    {{-- data tabel --}}
    {{-- <script>
        const googleScriptUrl = 'https://script.google.com/macros/s/AKfycbyAeVB2nMKZHHEdaSDvLzX68kPCSLdov7TezN7k2vEKKyGvvjDgghC0i02KP5Eqd6hoIA/exec';

        let allData = [];

        function fetchData() {
            Swal.fire({
                icon: 'warning',
                title: 'Sedang load data, mohon tunggu sebentar..',
                toast: true,
                position: 'top',
                showConfirmButton: false,
                allowOutsideClick: false,
                didOpen: () => Swal.showLoading()
            });

            fetch(googleScriptUrl)
                .then(res => res.text())
                .then(text => {
                    let data;
                    try { data = JSON.parse(text); } 
                    catch(e) { throw new Error('Response bukan JSON valid'); }
                    return data;
                })
                .then(data => {
                    allData = data.map(row => {
                        row.Timestamp = row.Timestamp ? row.Timestamp.substring(0,10) : '';
                        return row;
                    });
                    renderTable();
                    Swal.fire({ icon:'success', title:'Data berhasil dimuat!', toast:true, position:'top', timer:2000, showConfirmButton:false });
                })
                .catch(err => {
                    console.error(err);
                    Swal.fire('Error', 'Gagal mengambil data: ' + err.message, 'error');
                })
                .finally(() => Swal.close());
        }

        function formatDate(dateString) {
            if (!dateString) return '';
            const d = new Date(dateString);
            if (isNaN(d)) return dateString;
            return d.toLocaleDateString('id-ID', { day: '2-digit', month: '2-digit', year: 'numeric' });
        }

        function renderTable() {
            if ($.fn.DataTable.isDataTable('#mentorDataTable')) {
                $('#mentorDataTable').DataTable().destroy();
            }

            const tbody = $('#mentorDataTable tbody');
            tbody.empty();

            allData.forEach((row, idx) => {
                const columns = [
                    idx+1,
                    `<button class="btn btn-sm btn-success btn-download-cv" data-id="${row['ID'] || idx}" data-nama="${row['NAMA (INDONESIA)'] || ''}">
                        <i class="fa fa-download"></i> Download CV
                    </button>`,
                    formatDate(row['Timestamp']) || '',
                    row['EMAIL'] || '',
                    row['NAMA (KATAKANA)'] || '',
                    row['NAMA (INDONESIA)'] || '',
                    row['ALAMAT'] || '',
                    formatDate(row['TANGGAL LAHIR']) || '',
                    row['USIA'] || '',
                    row['KELAMIN'] || '',
                    row['NO HP AKTIF'] || '',
                    row['AGAMA'] || '',
                    row['TINGGI'] || '',
                    row['BERAT'] || '',
                    row['GOL DARAH'] || '',
                    row['BUTA WARNA'] || '',
                    row['MATA KIRI'] || '',
                    row['MATA KANAN'] || '',
                    row['PERNAH OPERASI'] || '',
                    row['APAKAH SEDANG MINUM'] || '',
                    row['TANGAN'] || '',
                    row['MEROKOK'] || '',
                    row['PENYAKIT DALAM'] || '',
                    row['KEAHLIAN'] || '',
                    row['SIFAT/KEPRIBADIAN'] || '',
                    row['KELEBIHAN'] || '',
                    row['KELEMAHAN'] || '',
                    row['STATUS'] || '',
                    row['HOBI'] || '',
                    row['MOTIVASI'] || '',
                    row['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] || '',
                    row['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'] || '',
                    row['APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'] || '',
                    row['JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'] || '',
                    row['SEKOLAH DASAR (SD)'] || '',
                    row['TAHUN MASUK SEKOLAH (SD)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SD)'] || '',
                    row['SEKOLAH MENENGAH PERTAMA (SMP)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMP)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMP)'] || '',
                    row['SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMA/SMK)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMA/SMK)'] || '',
                    row['JURUSAN (SMA/SMK)'] || '',
                    row['PERGURUAN TINGGI'] || '',
                    row['PENGALAMAN KERJA'] || '',
                    row['BAHASA ASING YANG DIKUASAI'] || '',
                    row['PERNAH KE JEPANG'] || '',
                    row['JIKA YA, SEBUTKAN TGL/BLN/THN'] || '',
                    row['PERNAH LUAR NEGERI LAINNYA'] || '',
                    row['JIKA YA, NEGARA APA'] || '',
                    row['APAKAH ADA KERABAT DI JEPANG'] || '',
                    row['APA HUBUNGAN KERABAT YANG DI JEPANG'] || '',
                    row['BELAJAR BAHASA'] || '',
                    row['BUKU YANG DI PAKAI'] || '',
                    row['BAB YANG DI PELAJARI'] || '',
                    row['NAMA AYAH'] || '',
                    row['HUBUNGAN AYAH'] || '',
                    row['USIA AYAH'] || '',
                    row['PEKERJAAN AYAH'] || '',
                    row['NAMA IBU'] || '',
                    row['HUBUNGAN IBU'] || '',
                    row['USIA IBU'] || '',
                    row['PEKERJAAN IBU'] || '',
                    row['NAMA SAUDARA'] || '',
                    row['PENDAPAT KELUARGA'] || '',
                    row['NO HP KELUARGA'] || '',
                    row['NAMA MENTOR'] || '',
                    row['UKURAN BAJU'] || '',
                    row['NOMOR SEPATU'] || '',
                    row['ID'] || '',
                    row['PILIH PROGRAM'] || '',
                    row['PILIH KELAS'] || ''
                ];

                tbody.append(`<tr>${columns.map(c => `<td>${c}</td>`).join('')}</tr>`);
            });

            $('#mentorDataTable').DataTable({
                pageLength: parseInt($('#entriesSelect').val()) || 10,
                lengthMenu: [5, 10, 25, 50, 100],
                ordering: false,
                responsive: true,
                autoWidth: false
            });

            $('#entriesSelect').on('change', function() {
                const val = parseInt($(this).val());
                $('#mentorDataTable').DataTable().page.len(val).draw();
            });
        }

        fetchData();
    </script> --}}

    <script>
        const googleScriptUrl = 'https://script.google.com/macros/s/AKfycbyAeVB2nMKZHHEdaSDvLzX68kPCSLdov7TezN7k2vEKKyGvvjDgghC0i02KP5Eqd6hoIA/exec';
        let allData = [];

        function fetchData() {
            Swal.fire({
                icon: 'warning',
                title: 'Sedang load data, mohon tunggu sebentar..',
                toast: true,
                position: 'top',
                showConfirmButton: false,
                allowOutsideClick: false,
                didOpen: () => Swal.showLoading()
            });

            fetch(googleScriptUrl)
                .then(res => res.text())
                .then(text => {
                    let data;
                    try { data = JSON.parse(text); } 
                    catch(e) { throw new Error('Response bukan JSON valid'); }
                    return data;
                })
                .then(data => {
                    allData = data.map(row => {
                        row.Timestamp = row.Timestamp ? row.Timestamp.substring(0,10) : '';
                        row['TANGGAL LAHIR'] = row['TANGGAL LAHIR'] ? row['TANGGAL LAHIR'].substring(0,10) : '';
                        return row;
                    });
                    renderTable();
                    Swal.fire({ icon:'success', title:'Data berhasil dimuat!', toast:true, position:'top', timer:2000, showConfirmButton:false });
                })
                .catch(err => {
                    console.error(err);
                    Swal.fire('Error', 'Gagal mengambil data: ' + err.message, 'error');
                })
                .finally(() => Swal.close());
        }

        function formatDate(dateString) {
            if (!dateString) return '';
            const d = new Date(dateString);
            if (isNaN(d)) return dateString;
            return d.toLocaleDateString('id-ID', { day: '2-digit', month: '2-digit', year: 'numeric' });
        }

        function renderTable() {
            // Destroy DataTable jika sudah ada
            if ($.fn.DataTable.isDataTable('#mentorDataTable')) {
                $('#mentorDataTable').DataTable().clear().destroy();
            }

            const tbody = $('#mentorDataTable tbody');
            tbody.empty();

            allData.forEach((row, idx) => {
                const cols = [
                    idx+1,
                    `<button class="btn btn-sm btn-success btn-download-cv" data-id="${row['ID'] || idx}" data-nama="${row['NAMA (INDONESIA)'] || ''}">
                        <i class="fa fa-download"></i> Download CV
                    </button>`,
                    formatDate(row['Timestamp']),
                    row['EMAIL'] || '',
                    row['NAMA (KATAKANA)'] || '',
                    row['NAMA (INDONESIA)'] || '',
                    row['ALAMAT'] || '',
                    formatDate(row['TANGGAL LAHIR']),
                    row['USIA'] || '',
                    row['KELAMIN'] || '',
                    row['NO HP AKTIF'] || '',
                    row['AGAMA'] || '',
                    row['TINGGI'] || '',
                    row['BERAT'] || '',
                    row['GOL DARAH'] || '',
                    row['BUTA WARNA'] || '',
                    row['MATA KIRI'] || '',
                    row['MATA KANAN'] || '',
                    row['PERNAH OPERASI'] || '',
                    row['APAKAH SEDANG MINUM'] || '',
                    row['TANGAN'] || '',
                    row['MEROKOK'] || '',
                    row['PENYAKIT DALAM'] || '',
                    row['KEAHLIAN'] || '',
                    row['SIFAT/KEPRIBADIAN'] || '',
                    row['KELEBIHAN'] || '',
                    row['KELEMAHAN'] || '',
                    row['STATUS'] || '',
                    row['HOBI'] || '',
                    row['MOTIVASI'] || '',
                    row['SELAMA 3 TAHUN DI JEPANG MAU NABUNG BERAPA'] || '',
                    row['SETELAH PULANG JEPANG, APA YANG AKAN DILAKUKAN'] || '',
                    row['APAKAH ANDA PERNAH TINGGAL/BEKERJA DI JEPANG'] || '',
                    row['JIKA YA, KUALIFIKASI APA YANG ANDA LAMAR'] || '',
                    row['SEKOLAH DASAR (SD)'] || '',
                    row['TAHUN MASUK SEKOLAH (SD)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SD)'] || '',
                    row['SEKOLAH MENENGAH PERTAMA (SMP)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMP)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMP)'] || '',
                    row['SEKOLAH MENENGAH ATAS/KEJURUAN (SMA/SMK)'] || '',
                    row['TAHUN MASUK SEKOLAH (SMA/SMK)'] || '',
                    row['TAHUN KELUAR SEKOLAH (SMA/SMK)'] || '',
                    row['JURUSAN (SMA/SMK)'] || '',
                    row['PERGURUAN TINGGI'] || '',
                    row['PENGALAMAN KERJA'] || '',
                    row['BAHASA ASING YANG DIKUASAI'] || '',
                    row['PERNAH KE JEPANG'] || '',
                    row['JIKA YA, SEBUTKAN TGL/BLN/THN'] || '',
                    row['PERNAH LUAR NEGERI LAINNYA'] || '',
                    row['JIKA YA, NEGARA APA'] || '',
                    row['APAKAH ADA KERABAT DI JEPANG'] || '',
                    row['APA HUBUNGAN KERABAT YANG DI JEPANG'] || '',
                    row['BELAJAR BAHASA'] || '',
                    row['BUKU YANG DI PAKAI'] || '',
                    row['BAB YANG DI PELAJARI'] || '',
                    row['NAMA AYAH'] || '',
                    row['HUBUNGAN AYAH'] || '',
                    row['USIA AYAH'] || '',
                    row['PEKERJAAN AYAH'] || '',
                    row['NAMA IBU'] || '',
                    row['HUBUNGAN IBU'] || '',
                    row['USIA IBU'] || '',
                    row['PEKERJAAN IBU'] || '',
                    row['NAMA SAUDARA'] || '',
                    row['PENDAPAT KELUARGA'] || '',
                    row['NO HP KELUARGA'] || '',
                    row['NAMA MENTOR'] || '',
                    row['UKURAN BAJU'] || '',
                    row['NOMOR SEPATU'] || '',
                    row['ID'] || '',
                    row['PILIH PROGRAM'] || '',
                    row['PILIH KELAS'] || ''
                ];

                tbody.append(`<tr>${cols.map(c => `<td>${c}</td>`).join('')}</tr>`);
            });

            $('#mentorDataTable').DataTable({
                pageLength: 10,
                lengthMenu: [5,10,25,50,100],
                ordering: false,
                responsive: true,
                autoWidth: false
            });
        }

        fetchData();
    </script>

    {{-- download cv --}}
    <script>
        $(document).on('click', '.btn-download-cv', function(e) {
            e.preventDefault();

            const id = $(this).data('id');
            const nama = $(this).data('nama');

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to download this CV?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                confirmButtonColor: '#046392'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/export-cv-word/${id}`, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Download failed');
                        }
                        return response.blob();
                    })
                    .then(blob => {
                        const url = window.URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = `CV_${nama.replace(/\s+/g, '_')}.docx`;
                        document.body.appendChild(a);
                        a.click();
                        a.remove();
                        window.URL.revokeObjectURL(url);

                        Swal.fire({
                            title: 'Success!',
                            text: 'File has been downloaded.',
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    })
                    .catch(error => {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to download file.',
                            icon: 'error'
                        });
                    });
                }
            });
        });
    </script>

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

    <script>
        // Refresh tabel
        function refreshTable() {
            const indicator = document.getElementById('refreshIndicator');
            indicator.style.display = 'inline';

            fetch('{{ route('refresh.pendaftaran') }}')
                .then(response => response.text())
                .then(html => {
                    document.getElementById('tableBody').innerHTML = html;
                    indicator.style.display = 'none';
                })
                .catch(error => {
                    console.error('Gagal refresh tabel', error);
                    indicator.innerText = '❌ Gagal memuat data';
                    setTimeout(() => {
                        indicator.style.display = 'none';
                        indicator.innerText = '🔄 Refreshing data...';
                    }, 600000);
                });
        }

        setInterval(refreshTable, 600000);

        $(document).ready(function() {
            let table = $('#spreadsheetTable').DataTable({
                "paging": true,
                "pageLength": 20,
                "searching": true,
                "info": false,
                "lengthChange": false,
                "scrollY": false,
                "scrollCollapse": false,
                "dom": 'rtp'
            });

            // **Sembunyikan pagination bawaan DataTables**
            $('.dataTables_paginate').hide();

            // Custom Search
            $('#tableSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Custom Entries Dropdown
            $('#entriesSelect').on('change', function() {
                table.page.len(this.value).draw();
            });

            $(document).on('click', '#paginationControls .page-link', function(e) {
                e.preventDefault();
                let page = parseInt($(this).data('page'));
                if (!isNaN(page)) {
                    table.page(page).draw('page');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script>
        $(document).on('click', '.btn-download-cv', function(e) {
            e.preventDefault();

            const id = $(this).data('id');
            const nama = $(this).data('nama');

            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to download this CV?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'OK',
                confirmButtonColor: '#093d91'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/export-cv-word/${id}`, {
                            method: 'GET',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Download failed');
                            }
                            return response.blob();
                        })
                        .then(blob => {
                            const url = window.URL.createObjectURL(blob);
                            const a = document.createElement('a');
                            a.href = url;
                            a.download = `CV_${nama.replace(/\s+/g, '_')}.docx`;
                            document.body.appendChild(a);
                            a.click();
                            a.remove();
                            window.URL.revokeObjectURL(url);

                            Swal.fire({
                                title: 'Success!',
                                text: 'File has been downloaded.',
                                icon: 'success',
                                timer: 2000,
                                showConfirmButton: false
                            });
                        })
                        .catch(error => {
                            Swal.fire({
                                title: 'Error!',
                                text: 'Failed to download file.',
                                icon: 'error'
                            });
                        });
                }
            });
        });
    </script> --}}
</body>

</html>
