<?php

// ------------ Admin ------------
Route::group(['prefix' => 'admin',  'middleware' => 'auth.admin'], function() {

    // @todo update this route
    Route::get('/', function () {
        return view('admin/layouts/primary');
    });

    // Albums
    Route::get('albums', 'Admin\AlbumsController@index');
    Route::get('albums/create', 'Admin\AlbumsController@create');
    Route::post('albums', 'Admin\AlbumsController@store');
    Route::get('albums/{album}/delete', 'Admin\AlbumsController@delete');

    // Pages
    Route::get('test', 'Admin\PagesController@index');

    // Photos
    Route::get('photos', 'Admin\PhotosController@index');
    Route::get('photos/create', 'Admin\PhotosController@create');
    Route::post('photos', 'Admin\PhotosController@store');

    // Posts
    Route::get('posts/create', 'Admin\PostsController@create');
    Route::get('posts/{post}', 'Admin\PostsController@show');
    Route::get('posts/{post}/edit', 'Admin\PostsController@edit');
    Route::get('posts', 'Admin\PostsController@index');
    Route::post('posts', 'Admin\PostsController@store');
    Route::get('posts/{post}/delete', 'Admin\PostsController@delete');

    // Tags
    Route::get('tags/create', 'Admin\TagsController@create');
    Route::get('tags/{tag}/edit', 'Admin\TagsController@edit');
    Route::get('tags', 'Admin\TagsController@index');
    Route::post('tags', 'Admin\TagsController@store');
    Route::get('tags/{tag}/delete', 'Admin\TagsController@delete');
});
// ------------ end: Admin ------------

//Albums
Route::get('/albums', 'AlbumsController@index');
//Route::get('/albums/create', 'AlbumsController@create');
//Route::post('/albums', 'AlbumsController@store');

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
Route::get('/humans/des', function(){
    return view('pages.des');
});
Route::get('/humans/amanda', function(){
    return view('pages.amanda');
});

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
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');

//Sessions
Route::get('/login', 'SessionsController@create')->name('login');;
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy')->name('logout');

// Tags
Route::get('/posts/tags/{tag}', 'TagsController@posts');
Route::get('/photos/tags/{tag}', 'TagsController@photos');


// @todo feel free to remove here just for reference
//// Authentication Routes...
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');
