<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam porro autem earum saepe doloribus et, amet voluptatem quidem dolorem commodi inventore officia ipsam. Voluptas ex velit quo fugit adipisci laboriosam autem officia. Perspiciatis magnam voluptatibus beatae omnis commodi enim quae esse. Vel fugit exercitationem vero est quam, cum molestias asperiores!'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post',
            'author' => 'Jane Smith',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam porro autem earum saepe doloribus et, amet voluptatem quidem dolorem commodi inventore officia ipsam. Voluptas ex velit quo fugit adipisci laboriosam autem officia. Perspiciatis magnam voluptatibus beatae omnis commodi enim quae esse. Vel fugit exercitationem vero est quam, cum molestias asperiores!'
        ]
    ]]);
});

Route::get('/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'first-post',
            'title' => 'First Post',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam porro autem earum saepe doloribus et, amet voluptatem quidem dolorem commodi inventore officia ipsam. Voluptas ex velit quo fugit adipisci laboriosam autem officia. Perspiciatis magnam voluptatibus beatae omnis commodi enim quae esse. Vel fugit exercitationem vero est quam, cum molestias asperiores!'
        ],
        [
            'id' => 2,
            'slug' => 'second-post',
            'title' => 'Second Post',
            'author' => 'Jane Smith',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam porro autem earum saepe doloribus et, amet voluptatem quidem dolorem commodi inventore officia ipsam. Voluptas ex velit quo fugit adipisci laboriosam autem officia. Perspiciatis magnam voluptatibus beatae omnis commodi enim quae esse. Vel fugit exercitationem vero est quam, cum molestias asperiores!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', [
        'title' => $post['title'],
        'post' => $post
    ]);
});
