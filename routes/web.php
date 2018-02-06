<?php

// ------------ Admin ------------
Route::prefix('admin')->group(function () {

    // @todo update this route
    Route::get('/', function () {
        return view('admin/layouts/primary');
    });

    // Pages
    Route::get('test', 'Admin\PagesController@index');

    // Posts
    Route::get('posts/create', 'Admin\PostsController@create');
    Route::get('posts/{post}', 'Admin\PostsController@show');
    Route::get('posts/{post}/edit', 'Admin\PostsController@edit');
    Route::get('posts', 'Admin\PostsController@index');
    Route::post('posts', 'Admin\PostsController@store');
    Route::post('posts/{post}/delete', 'Admin\PostsController@delete');
});
// ------------ end: Admin ------------

//Albums
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::post('/albums', 'AlbumsController@store');

//Comments
Route::post('/posts/{post}/comments', 'CommentsController@store');

//Home
Route::get('/', 'HomeController@index')->name('home');

//Pages
Route::get('/kitties/mozzie', function(){
    return view('pages.mozzie');
});
Route::get('/kitties/nessie', function(){
    return view('pages.nessie');
});
Route::get('/humans', 'PagesController@humans');

//Photos
Route::get('/photos', 'PhotosController@index');
Route::get('/photos/create', 'PhotosController@create');
Route::post('/photos', 'PhotosController@store');

//Posts
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

//Registration
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

//Sessions
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

// Tags
Route::get('/posts/tags/{tag}', 'TagsController@posts');
Route::get('/photos/tags/{tag}', 'TagsController@photos');
