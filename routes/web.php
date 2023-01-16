<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Mohamad Hasan Bisri",
        "email" => "bisri@softwaresekolah.com",
        "gambar" => "bisri.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Ini blog Pertama saya",
            "slug" => "ini-blog-pertama-saya",
            "author" => "Mohamad Hasan Bisri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid at, veniam natus tenetur nihil a dolorem quae? Tempora cum, in fugiat asperiores ab quibusdam illo adipisci natus veritatis ad eum sint dolores? Et, minus. Fuga, odit sit! Nam, consectetur eum vero eos hic est quos, ab nihil ipsum tempora ex sed totam labore molestiae perspiciatis fugit perferendis, quae recusandae. Illo consequatur voluptatibus tempora tempore libero quidem, sit qui repellendus doloribus perferendis. Tempore ipsa fugiat earum quidem blanditiis eius saepe aperiam.",
            "gambar" => "bisri.jpg"
        ],
        [
            "title" => "Ini blog kedua saya",
            "slug" => "ini-blog-kedua-saya",
            "author" => "Firman Dwi Ardiansyah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid at, veniam natus tenetur nihil a dolorem quae? Tempora cum, in fugiat asperiores ab quibusdam illo adipisci natus veritatis ad eum sint dolores? Et, minus. Fuga, odit sit! Nam, consectetur eum vero eos hic est quos, ab nihil ipsum tempora ex sed totam labore molestiae perspiciatis fugit perferendis, quae recusandae. Illo consequatur voluptatibus tempora tempore libero quidem, sit qui repellendus doloribus perferendis. Tempore ipsa fugiat earum quidem blanditiis eius saepe aperiam.",
            "gambar" => "bisri.jpg"
        ]
        ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Ini blog Pertama saya",
            "slug" => "ini-blog-pertama-saya",
            "author" => "Mohamad Hasan Bisri",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid at, veniam natus tenetur nihil a dolorem quae? Tempora cum, in fugiat asperiores ab quibusdam illo adipisci natus veritatis ad eum sint dolores? Et, minus. Fuga, odit sit! Nam, consectetur eum vero eos hic est quos, ab nihil ipsum tempora ex sed totam labore molestiae perspiciatis fugit perferendis, quae recusandae. Illo consequatur voluptatibus tempora tempore libero quidem, sit qui repellendus doloribus perferendis. Tempore ipsa fugiat earum quidem blanditiis eius saepe aperiam.",
            "gambar" => "bisri.jpg"
        ],
        [
            "title" => "Ini blog kedua saya",
            "slug" => "ini-blog-kedua-saya",
            "author" => "Firman Dwi Ardiansyah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid at, veniam natus tenetur nihil a dolorem quae? Tempora cum, in fugiat asperiores ab quibusdam illo adipisci natus veritatis ad eum sint dolores? Et, minus. Fuga, odit sit! Nam, consectetur eum vero eos hic est quos, ab nihil ipsum tempora ex sed totam labore molestiae perspiciatis fugit perferendis, quae recusandae. Illo consequatur voluptatibus tempora tempore libero quidem, sit qui repellendus doloribus perferendis. Tempore ipsa fugiat earum quidem blanditiis eius saepe aperiam.",
            "gambar" => "bisri.jpg"
        ]
        ];
        $new_post = [];
        foreach($blog_posts as $post){
            if($post["slug"] === $slug){
                $new_post = $post;
            }
        }
    return view('post',[
        "title" => "Singel Post",
        "post" => $new_post
    ]);
});
