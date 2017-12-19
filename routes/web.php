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

Route::get('/images', 'ImageController@index');
Route::get('/image/create', 'ImageController@create');
Route::post('/image', 'ImageController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
