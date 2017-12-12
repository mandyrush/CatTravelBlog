<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@posts');
Route::get('/galleries/tags/{tag}', 'TagsController@galleries');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/gallery', 'GalleryController@index');
Route::get('/gallery/create', 'GalleryController@create');
Route::post('/gallery', 'GalleryController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
