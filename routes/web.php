<?php

//Albums
Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::post('/albums', 'AlbumsController@store');

//Comments
Route::post('/posts/{post}/comments', 'CommentsController@store');

//Home
Route::get('/', 'HomeController@index')->name('home');

//Pages
Route::get('/kitties', 'PagesController@kitties');
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
