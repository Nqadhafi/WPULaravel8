<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about',[
        'title' => "about"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'title' => "home",
        'nama' => "nanda",
        'email' => "wkwkw@gmail.com",
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('post/{post}', [PostController::class,'each']);