<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizky",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam eligendi molestias soluta blanditiis voluptas quasi modi inventore incidunt corporis tempore earum cupiditate debitis delectus eius, velit amet itaque enim. Alias dolorem aspernatur modi? Minima ut vero consequatur accusamus necessitatibus voluptatum maiores qui illum magni sit nobis quasi sed officiis ullam aliquid in harum provident, cum odit animi. Maxime laborum, necessitatibus dolores excepturi iusto corrupti qui illo cumque soluta! Distinctio, modi? Ipsam molestias blanditiis similique ad incidunt nulla quasi dicta necessitatibus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rizky aja",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam eligendi molestias soluta blanditiis voluptas quasi modi inventore incidunt corporis tempore earum cupiditate debitis delectus eius, velit amet itaque enim. Alias dolorem aspernatur modi? Minima ut vero consequatur accusamus necessitatibus voluptatum maiores qui illum magni sit nobis quasi sed officiis ullam aliquid in harum provident, cum odit animi. Maxime laborum, necessitatibus dolores excepturi iusto corrupti qui illo cumque soluta! Distinctio, modi? Ipsam molestias blanditiis similique ad incidunt nulla quasi dicta necessitatibus."
        ],
    
    ];

    public static function all(){
        return collect(self::$blog_post);
        // return self::$blog_post;
        // return $this->$blog_post;
    }

    public static function find($slug){
        $posts = static:: all();
        // $posts = self:: $blog_post;
        // $post=[];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);   
    }
}
