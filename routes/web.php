<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
//test
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about',[
        'title' => "about",
        'active' => 'about',
    ]);
});

Route::get('/home', function () {
    return view('home',[
        'title' => "home",
        'active' => 'home',
        'nama' => "nanda",
        'email' => "wkwkw@gmail.com",
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class,'each']);
Route::get('categories', function(){
    return view('categories',[
        'title' => 'Post Categoriess',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);