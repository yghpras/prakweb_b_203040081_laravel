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
    return view('Home', [
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => 'About',
        "name" => "Yoghi Prasetiyo ",
        "email" => "yoghi.203040081@mail.unpas.ac.id",
        "image" => "foto.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-post-pertama",
        "author" => "Yoghi Prasetiyo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat alias a soluta. Nobis harum quisquam officiis ratione dolor et in illum voluptatibus error maiores porro exercitationem, aliquid vero magnam similique accusantium delectus sequi voluptates qui ut earum labore perferendis obcaecati praesentium. Quod veniam, dolor repellat dolores dicta excepturi exercitationem quis nisi. Vel obcaecati iusto, labore ratione placeat expedita impedit eos? Explicabo obcaecati possimus numquam nulla porro unde quod, aliquam, libero corrupti sapiente itaque delectus excepturi rerum quis earum reiciendis?"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "Judul-post-kedua",
        "author" => "OkyBoy",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum accusamus iusto quos et sed, nesciunt magnam error. Cum nostrum, vero quasi voluptatum deleniti quas dolorem hic saepe dolor tempore tempora ullam libero adipisci porro corrupti ducimus? Rerum, inventore blanditiis. Aut possimus, praesentium atque ad doloremque harum officiis dolorem doloribus sed et, alias omnis, enim fugit laborum totam ipsam placeat molestias numquam suscipit! Rem nostrum, non unde, autem a obcaecati laudantium quae dolores mollitia, blanditiis repudiandae ad dolorem! Rerum natus est fugit, consequatur rem possimus commodi. Amet facilis quos quidem iure quo distinctio repellendus similique officiis magni laboriosam, quas incidunt eligendi."
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// //Halaman single post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-post-pertama",
        "author" => "Yoghi Prasetiyo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat alias a soluta. Nobis harum quisquam officiis ratione dolor et in illum voluptatibus error maiores porro exercitationem, aliquid vero magnam similique accusantium delectus sequi voluptates qui ut earum labore perferendis obcaecati praesentium. Quod veniam, dolor repellat dolores dicta excepturi exercitationem quis nisi. Vel obcaecati iusto, labore ratione placeat expedita impedit eos? Explicabo obcaecati possimus numquam nulla porro unde quod, aliquam, libero corrupti sapiente itaque delectus excepturi rerum quis earum reiciendis?"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "Judul-post-kedua",
        "author" => "OkyBoy",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum accusamus iusto quos et sed, nesciunt magnam error. Cum nostrum, vero quasi voluptatum deleniti quas dolorem hic saepe dolor tempore tempora ullam libero adipisci porro corrupti ducimus? Rerum, inventore blanditiis. Aut possimus, praesentium atque ad doloremque harum officiis dolorem doloribus sed et, alias omnis, enim fugit laborum totam ipsam placeat molestias numquam suscipit! Rem nostrum, non unde, autem a obcaecati laudantium quae dolores mollitia, blanditiis repudiandae ad dolorem! Rerum natus est fugit, consequatur rem possimus commodi. Amet facilis quos quidem iure quo distinctio repellendus similique officiis magni laboriosam, quas incidunt eligendi."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
