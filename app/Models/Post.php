<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function findBySlug($slug):array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
?>
