<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/posts/tags/{tag}', 'TagsController@posts');
Route::get('/images/tags/{tag}', 'TagsController@images');

Route::get('/kitties', 'PagesController@kitties');
Route::get('/humans', 'PagesController@humans');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/images', 'ImagesController@index');
Route::get('/images/create', 'ImagesController@create');
Route::post('/images', 'ImagesController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
