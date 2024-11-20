<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LandingPageController;

// Landing Page
Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::get('/program-jepang', [LandingPageController::class, 'program_jepang'])->name('landing.program_jepang');

// Route::get('/', function () {
//     $images = [
//         '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
//         '9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg',
//         '19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg',
//         '30.jpg','31.jpg','32.jpg','33.jpg','34.jpg'
//     ];

//     return view('landing/landing-new', ['images' => $images]);
// });

// Route::get('/galeri', function () {
//     $images = [
//         '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
//         '9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg',
//         '19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg',
//         '30.jpg','31.jpg','32.jpg','33.jpg','34.jpg'
//     ];

//     return view('landing/galeri', ['images' => $images]);
// });

// Route::get('/program-korea', function () {
//     $images = [
//         '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
//         '9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg',
//         '19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg',
//         '30.jpg','31.jpg','32.jpg','33.jpg','34.jpg'
//     ];

//     return view('landing/program-korea', ['images' => $images]);
// });

// Route::get('/program-jepang', function () {
//     return view('landing/program-jepang');
// });

Route::get('/upload', [ImageUploadController::class, 'index'])->name('images.index');
Route::post('/upload', [ImageUploadController::class, 'store'])->name('images.store');