<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/{slug}', function ($slug) {

    $post = Post::findBySlug($slug);

    return view('post', [
        'title' => $post['title'],
        'post' => $post
    ]);
});
