<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PendaftaranController;

# Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/program-jepang', [LandingPageController::class, 'program_jepang'])->name('landing.program_jepang');

# upload image
Route::get('/upload', [ImageUploadController::class, 'index'])->name('images.index');
Route::post('/upload', [ImageUploadController::class, 'store'])->name('images.store');
Route::delete('/images/{id}', [ImageUploadController::class, 'delete'])->name('images.delete');

# pendaftaran umum
Route::get('/pendaftaran-siswa-baru', [PendaftaranController::class, 'pendaftaran_baru']);

# for mentor
Route::get('/pendaftaran-siswa-baru/{mentor}', [PendaftaranController::class, 'pendaftaran_baru']);
Route::post('/pendaftaran-siswa-baru', [PendaftaranController::class, 'store_pendaftaran_baru']);

# get data pendaftaran baru
Route::get('/data-pendaftaran', [PendaftaranController::class, 'data_pendaftaran_new']);

# refresh
Route::get('/refresh-table-pendaftaran', [PendaftaranController::class, 'refreshTablePendaftaran'])->name('refresh.pendaftaran');

Route::get('/export-cv-pdf/{id}', [PendaftaranController::class, 'export_cv_pdf'])->name('export.pdf');
Route::get('/export-cv-word/{id}', [PendaftaranController::class, 'export_cv_word'])->name('export.cv.word');
