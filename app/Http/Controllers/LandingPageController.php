<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class LandingPageController extends Controller
{
    public function index()
    {
        $images_db = Image::orderBy('created_at', 'desc')->paginate(12);
        $images = [
            '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
            '9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg',
            '19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg',
            '30.jpg','31.jpg'
        ];
        return view('landing.landing-new', ['images_db' => $images_db, 'images' => $images]);
    }

    public function program_jepang()
    {
        $images = [
            '1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg',
            '9.jpg','10.jpg','11.jpg','12.jpg','13.jpg','14.jpg','15.jpg','16.jpg','17.jpg','18.jpg',
            '19.jpg','20.jpg','21.jpg','22.jpg','23.jpg','24.jpg','25.jpg','26.jpg','27.jpg','28.jpg','29.jpg',
            '30.jpg','31.jpg','32.jpg','33.jpg','34.jpg'
        ];
        $images_db = Image::orderBy('created_at', 'desc')->get();
        return view('landing.program-jepang', [
            'images'    => $images,
            'images_db' => $images_db
        ]);
    }

    public function manual_book()
    {
        $images_db = Image::orderBy('created_at', 'desc')->paginate(12);
        return view('landing.manual-book', ['images_db' => $images_db]);
    }
}