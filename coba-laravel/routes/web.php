<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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



Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show']);
