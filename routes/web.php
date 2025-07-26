<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('home', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/{post:slug}', function (Post $post) {

    return view('post', ['title' => $post['title'],'post' => $post
    ]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('home', ['title' => count($user->posts).' Articles by ' . $user->name, 'posts' => $user->posts
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('home', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts
    ]);
});
