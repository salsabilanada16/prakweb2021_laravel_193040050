<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Salsabila Nada Adzani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Libero suscipit excepturi eveniet, ipsam quia soluta ut cum consectetur voluptas? 
            Perspiciatis ad harum tenetur voluptate ducimus magni dolorem a impedit ipsa esse 
            libero animi iusto reiciendis, dolore tempore praesentium quibusdam culpa quod 
            quos nam sunt amet dolor alias. Alias dolorum, illo, voluptatum rem similique 
            voluptates autem corrupti consequatur deleniti inventore quibusdam dignissimos iusto 
            repudiandae et omnis ullam quisquam aliquid. Quasi nulla ratione neque quibusdam odit 
            dignissimos repellendus molestias qui ullam dolorum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Gilang Ramadhan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos temporibus 
            deserunt quidem harum commodi autem facere illum magni, aspernatur nihil animi nemo 
            labore! Ex cupiditate voluptatibus numquam laudantium odit quidem, corporis architecto, 
            cumque unde, iusto rerum asperiores ratione laborum ea! Dicta esse nisi animi mollitia, 
            fugit iusto vel harum, voluptatem velit quo ipsam omnis sint dolorum atque explicabo 
            sit vero modi rerum vitae aliquid recusandae dolorem. Ducimus unde debitis fugiat fuga 
            eligendi magni beatae, laboriosam magnam mollitia similique porro tenetur cum dolorum 
            ex rerum ipsam quos iure officia nihil facere natus minus incidunt amet deleniti? 
            Tenetur quod dolore optio deserunt?"
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
