<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Abdul Rohman', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Abdul Rohman',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut odit omnis dolor
            consequatur, ad impedit
            necessitatibus neque adipisci voluptatibus ab unde consectetur, nesciunt ducimus nisi, esse laboriosam
            magni. Ea, libero.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Abdul Rohman',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda repudiandae eos
            ea facilis ut aspernatur temporibus? Beatae voluptas totam adipisci sed dolorum itaque odio eveniet eaque
            placeat laudantium, iste exercitationem!'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});