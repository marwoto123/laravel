<?php

namespace App\Models;



class Post 
{
   private static  $blog_posts = [
        [
            "title" => "judul pertama",
            "slug" => "judul-pertama",
            "author" => "sandika",
            "body" => "Lorem Ipsum is simply dummy text of the printing and 
            typesetting industry. Lorem Ipsum has been the indust
            ext ever since the 1500s, when an unknown printer took "             
        ],
        [
            "title" => "judul kedua",
            "slug" => "judul-kedua",
            "author" => "jono",
            "body" => "Lorem Ipsum is simply dummy text of the printing and 
            typesetting industry. Lorem Ipsum has been the indust
            xt ever since the 1500s, when an unknown printer took "            
        ],                  
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
       

        $posts = static::all();
        return $posts->firstWhere('slug' , $slug);
    }

}
