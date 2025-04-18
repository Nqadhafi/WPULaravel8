<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return view('blog',[
            'title' => "blog",
            'blogpost' => Post::all()
        ]);
    }

    public function each($slug){
        return view('post',[
            'title' => "Lihat postingan",
            'post' => Post::each($slug)
        ]);
    }
}
