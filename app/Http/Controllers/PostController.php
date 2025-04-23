<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return view('blog',[
            'title' => "All Posts",
            'blogposts' => Post::latest()->get(),
        ]);
    }

    public function each(Post $post){
        return view('post',[
            'title' => "Lihat postingan",
            'post' => $post
        ]);
    }
}
