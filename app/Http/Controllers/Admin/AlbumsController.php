<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AlbumsController extends Controller
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
        $albums = Album::select()->paginate(20);

        return view('admin.albums.index', compact('albums'));
    }

    /**
     * Show selected Post
     *
     * @param Album $album
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Album $album)
    {
        return view('admin.albums.show', compact('album'));
    }

    /**
     * Show the form for creating a Album
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.albums.create');
    }

    /**
     * Store Album
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate(request(), ['title' => 'required']);

        $image = $request->file('cover_photo');

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

        Album::create([
            "title" => $request->title,
            "cover_photo" => $filePath,
        ]);

        return redirect('/admin/albums');
    }

    /**
     * Show the form for editing a Album
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);

        return view('admin.albums.edit', compact('album'));
    }

    /**
     * Update a Album
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $album = Album::findOrFail($id);

        $album->update($request->all());

        return redirect(Session::get('redirect'));
    }

    /**
     * Soft delete a Album
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Album::findOrFail($id)->delete();

        return redirect('/admin/albums');
    }
}
