<?php

namespace App\Models;


class Post 
{
private static $blog_posts = [
    [
        'title' => "First Post",
        'slug' => "first-post",
        'author' => "Nanda",
        'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam adipisci vel, maxime, perferendis eveniet quidem impedit nobis corrupti ratione mollitia voluptate libero voluptatum quod expedita vero, quo consequuntur qui?"
    ],
    [
        'title' => "Seccond Post",
        'slug' => "seccond-post",
        'author' => "Akmal",
        'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magnam adipisci vel, maxime, perferendis eveniet quidem impedit nobis corrupti ratione mollitia voluptate libero voluptatum quod expedita vero, quo consequuntur qui?"
    ]
    ];
    public static function all()  {
        return collect(self::$blog_posts);
    }

    public static function each($slug){
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}

