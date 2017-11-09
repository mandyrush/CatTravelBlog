<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('galleries.create');
    }

    public function store(Request $request)
    {
    //Validate form fields
        $this->validate(request(), [
            'location' => 'required'
        ]);

        foreach ($request->file('featured_image') as $file) {
            $filename = $file->store('public');

            // Save
            Gallery::create([
                "featured_image" => $filename,
                "location" => $request['location']
            ]);
        }

        return redirect('/gallery');
    }

    public function show(Gallery $gallery)
    {
        return view('galleries.show', compact('gallery'));
    }
}
