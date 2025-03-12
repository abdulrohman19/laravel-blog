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
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Abdul Rohman',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut odit omnis dolor
                consequatur, ad impedit
                necessitatibus neque adipisci voluptatibus ab unde consectetur, nesciunt ducimus nisi, esse laboriosam
                magni. Ea, libero.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Abdul Rohman',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda repudiandae eos
                ea facilis ut aspernatur temporibus? Beatae voluptas totam adipisci sed dolorum itaque odio eveniet eaque
                placeat laudantium, iste exercitationem!'
            ]
        ];
    }

    public static function find($slug)
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
