<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LPK GMI Japan Tegal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        :root {
            --c-action-primary: #2e44ff;
            --c-action-primary-accent: #e9e5ff;
            --c-action-secondary: #e5e5e5;
            --c-text-primary: #0d0f21;
            --c-text-secondary: #6a6b76;
            --c-background-primary: #d0d1de;
        }

        body::before {
            content: "";
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("https://garudamestakungindonesia.my.id/templates/assets/img/GMI/14.jpg") center center/cover no-repeat;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            opacity: 0.1;
            z-index: -1;
            pointer-events: none;
        }

        body::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            z-index: -2;
        }

        input,
        button,
        select,
        textarea {
            font: inherit;
        }

        .modal {
            width: 90%;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 6vh;
            margin-bottom: 10vh;
            background-color: #FFF;
            border-radius: 0.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1.5rem 1.5rem 1rem;
        }

        .logo-circle {
            width: 3.5rem;
            height: 3.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            background-color: var(--c-action-primary-accent);
        }

        .logo-circle svg {
            max-width: 1.5rem;
        }

        .btn-close {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.25rem;
            height: 2.25rem;
            border-radius: 0.25rem;
            border: none;
            background-color: transparent;
        }

        .btn-close:hover,
        .btn-close:focus {
            background-color: var(--c-action-primary-accent);
        }

        .modal-body {
            padding: 1rem 1.5rem;
        }

        .modal-title {
            font-weight: 700;
        }

        .modal-description {
            color: var(--c-text-secondary);
        }

        .upload-area {
            margin-top: 1.25rem;
            border: none;
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23ccc' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
            background-color: transparent;
            padding: 2rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .upload-area:hover,
        .upload-area:focus {
            background-image: url("data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%232e44ff' stroke-width='3' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e");
        }

        .upload-area-icon {
            display: block;
            width: 2.25rem;
            height: 2.25rem;
        }

        .upload-area-title {
            margin-top: 1rem;
            display: block;
            font-weight: 700;
            color: var(--c-text-primary);
            text-align: center;
        }

        .upload-area-description {
            display: block;
            color: var(--c-text-secondary);
            text-align: center;
        }

        .modal-footer {
            padding: 1rem 1.5rem 1.5rem;
            display: flex;
            justify-content: flex-end;
        }

        .modal-footer [class*=btn-] {
            margin-left: 0.75rem;
        }

        .btn-secondary,
        .btn-primary {
            padding: 0.5rem 1rem;
            font-weight: 500;
            border: 2px solid var(--c-action-secondary);
            border-radius: 0.25rem;
            background-color: transparent;
        }

        .btn-primary {
            color: #FFF;
            background-color: var(--c-action-primary);
            border-color: var(--c-action-primary);
        }

        .file-upload-wrapper {
            position: relative;
            text-align: center;
        }

        .file-upload-label {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: rgb(9, 61, 145);
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        #images {
            display: none;
        }

        @media (max-width: 600px) {
            .upload-area {
                padding: 1rem;
            }

            .modal-header {
                padding: 1rem;
            }

            .modal-body {
                padding: 1rem;
            }
        }

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
            border: 1px solid rgb(9, 61, 145);
            background-color: white;
            color: rgb(9, 61, 145);
            font-weight: bold;
        }

        .pagination li a:hover {
            background-color: rgb(9, 61, 145);
            color: white;
        }

        .pagination li.active span {
            background-color: rgb(9, 61, 145);
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
                        <div class="col-lg-12 text-center text-lg-start">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="modal-title">Upload a file</h2>
                                        <p class="modal-description">Attach the file below</p>
                                        @if (session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                        <form id="uploadForm" action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="images" class="upload-area" style="cursor: pointer;">
                                                    <span class="upload-area-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="340.531" height="419.116"
                                                            viewBox="0 0 340.531 419.116">
                                                        </svg>
                                                    </span>
                                                    <span class="upload-area-title">Drag file(s) here to upload.</span>
                                                    <span class="upload-area-description">
                                                        Please select image for upload.<br />
                                                    </span>
                                                    <p id="fileCount" style="margin-top: 10px;">No file selected</p>
                                                    <div class="file-upload-wrapper">
                                                        <label for="images" class="file-upload-label">Choose Image</label>
                                                        <input type="file" name="images[]" id="images" class="d-none" multiple required>
                                                    </div>
                                                </label>
                                            </div>
                                
                                            <div class="modal-footer" style="margin-top: 10px;">
                                                <button type="submit" class="btn btn-primary" style="background-color: rgb(9, 61, 145)">Upload</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="testimonials" id="galeri" style="padding-top: 20px;">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <center>
                            <h2>LPK GMI Japan</h2>
                        </center>
                    </div>
                    <div class="row">
                        @foreach ($images_db as $image)
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('storage/' . $image->filepath) }}" data-lity class="card-img-top lazyload" alt="Image" style="height: 100%; object-fit: cover;height: 300px;">
                                    </div>
                                    <div class="card-footer text-body-secondary">
                                        <b>Date:</b> {{ $image->created_at }}<br/>
                                        {{ \Carbon\Carbon::parse($image->created_at)->diffForHumans() }}
                                        <button class="btn btn-danger btn-sm delete-image" data-id="{{ $image->id }}" style="float: right;">
                                            Delete
                                        </button>
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
            </section> 
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $("#images").on("change", function() {
                let fileCount = this.files.length;
                
                if (fileCount > 10) {
                    Swal.fire("Warning!", "Maksimal 10 file yang bisa diupload!", "warning");
                    this.value = "";
                    fileCount = 0;
                }

                let fileCountText = fileCount > 0 ? `${fileCount} file(s) selected` : "No file selected";
                $("#fileCount").text(fileCountText);
            });

            // Upload
            $("#uploadForm").on("submit", function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to upload these files?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#046392",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Upload"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('images.store') }}",
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                Swal.fire({
                                    title: "Success!",
                                    text: "Your files have been uploaded.",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                }).then(() => {
                                    location.reload();
                                });

                                $("#uploadForm")[0].reset();
                                $("#fileCount").text("No file selected");
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    title: "Error!",
                                    text: "Failed to upload files. Please try again.",
                                    icon: "error",
                                    confirmButtonText: "OK"
                                });
                            }
                        });
                    }
                });
            });

            // Delete
            $(".delete-image").on("click", function () {
                let imageId = $(this).data("id");
                let token = $('meta[name="csrf-token"]').attr("content");

                Swal.fire({
                    title: "Are you sure?",
                    text: "Hapus file tersebut! hanya terhapus di database.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "OK",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/images/" + imageId,
                            type: "DELETE",
                            data: {
                                _token: token
                            },
                            success: function (response) {
                                if (response.success) {
                                    $(".image-card-" + imageId).fadeOut("slow", function () {
                                        $(this).remove();
                                    });
                                    Swal.fire("Dihapus!", "Gambar berhasil dihapus.", "success").then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire("Gagal!", "Gagal menghapus gambar.", "error");
                                }
                            },
                            error: function () {
                                Swal.fire("Error!", "Terjadi kesalahan saat menghapus.", "error");
                            },
                        });
                    }
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
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




