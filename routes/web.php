<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/{post:slug}', function (Post $post) {

    return view('post', ['title' => $post['title'],'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {

    return view('home', ['title' => count($user->posts).' Articles by ' . $user->name, 'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {

    return view('home', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts
    ]);
});
