<?php

Route::get('/', function () {
    $posts = DB::table('posts')->get();
    return view('posts.index', compact('posts'));
});

Route::get('posts/{id}', function ($id) {
     $post = DB::table('posts')->find($id);
     return view('posts.show', compact('post'));
});
