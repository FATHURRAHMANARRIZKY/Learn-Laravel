<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/{post:slug}', function (Post $post) {

    return view('post', ['title' => $post['title'],'post' => $post
    ]);
});

Route::get('/authors/{user}', function (User $user) {

    return view('home', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts
    ]);
});

