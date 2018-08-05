<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::select()
            ->orderBy('created_at', 'DESC')
            ->paginate(20);

        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Show selected Post
     *
     * @param Photo $photo
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Photo $photo)
    {
        return view('admin.photos.show', compact('photo'));
    }

    /**
     * Show the form for creating a Photo
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store Photo
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        foreach ($request->file('featured_photo') as $image) {

            // Limit filename length
            $filenameWithoutExtension = basename($image->getClientOriginalName(), '.'.$image->getClientOriginalExtension());
            $shortFilename = substr($filenameWithoutExtension, 0, 50);
            $imageFileName = $shortFilename .'_'.date('Ymd').'.'. $image->getClientOriginalExtension();

            // Place file on S3
            $s3 = Storage::disk('s3');
            $filePath = (string) 'uploads/'.$imageFileName;
            if (!$s3->put($filePath, file_get_contents($image), 'public')) {
                // @todo something bad happened
            }

            // Save
            $photo = Photo::create([
                "featured_photo" => $filePath
            ]);

            $photo->tags()->attach($request['tag']);
        }

        return redirect('/admin/photos');
    }

    /**
     * Show the form for replacing a Photo
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::findOrFail($id);

        return view('admin.photos.edit', compact('photo'));
    }

    /**
     * Update a Photo
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::findOrFail($id);

        $photo->update($request->all());

        return redirect(Session::get('redirect'));
    }

    /**
     * Soft delete a Photo
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Photo::findOrFail($id)->delete();

        return redirect('/admin/photos');
    }
}
