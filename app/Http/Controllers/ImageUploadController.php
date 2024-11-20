<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $destinationPath = '/home/amaz9546/public_html/garudamestakungindonesia.my.id/public/upload_image';
                $image->move($destinationPath, $filename);
                Image::create([
                    'filepath' => 'public/upload_image/' . $filename,
                ]);
            }
        }

        return back()->with('success', 'Images uploaded successfully');
    }
}
