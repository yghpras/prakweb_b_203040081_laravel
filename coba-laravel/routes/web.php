<?php

use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Category;

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
        "title" => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('About', [
        "title" => 'About',
        "name" => "Yoghi Prasetiyo ",
        "email" => "yoghi.203040081@mail.unpas.ac.id",
        "image" => "foto.jpeg",
        'active' => 'about'
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});



