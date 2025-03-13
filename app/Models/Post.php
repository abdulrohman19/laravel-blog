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
                'slug' => 'tips-belajar-laravel',
                'title' => 'Tips Efektif dalam Belajar Laravel untuk Pemula',
                'author' => 'Abdul Rohman',
                'body' => 'Laravel adalah salah satu framework PHP paling populer yang digunakan untuk membangun aplikasi web modern. 
                Untuk pemula, penting untuk memahami konsep dasar seperti routing, middleware, dan Eloquent ORM. 
                Mulailah dengan membaca dokumentasi resmi Laravel, mengikuti tutorial online, serta mencoba membangun proyek kecil 
                agar lebih memahami bagaimana Laravel bekerja dalam praktik.'
            ],
            [
                'id' => 2,
                'slug' => 'manfaat-menggunakan-laravel',
                'title' => 'Mengapa Harus Menggunakan Laravel dalam Pengembangan Web?',
                'author' => 'Abdul Rohman',
                'body' => 'Laravel menawarkan banyak fitur unggulan yang membuat pengembangan aplikasi web menjadi lebih cepat dan efisien. 
                Beberapa manfaat utama Laravel adalah syntax yang bersih dan mudah dibaca, sistem routing yang fleksibel, serta dukungan 
                untuk fitur keamanan seperti hashing password dan proteksi CSRF. Dengan ekosistem yang kuat dan komunitas yang besar, 
                Laravel menjadi pilihan utama bagi banyak developer web.'
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
