<?php

namespace App\Models;


class Post 
{
    private static $blog_post = [

        [
            "title"  => "Post Pertama",
            "slug"  => "post-pertama",
            "author" => "Habib Ahmad",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptates et inventore! Iste pariatur, voluptas laborum magnam rerum sunt! Odit ut commodi consequuntur vero earum aut nesciunt! Fugiat harum quod soluta. Assumenda enim sequi beatae repellat excepturi est distinctio vel. Aut beatae voluptates maiores provident eveniet, ipsum culpa quam molestiae sapiente sint ratione, minima et illo dolores velit eos voluptatibus laudantium neque libero perferendis optio reprehenderit vitae quidem nisi. Accusamus, aliquid consequatur? Placeat amet laborum minima!"
        ],
        [
            "title"  => "Post Kedua",
            "slug"  => "post-kedua",
            "author" => "Habib Ahmad",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptates et inventore! Iste pariatur, voluptas laborum magnam rerum sunt! Odit ut commodi consequuntur vero earum aut nesciunt! Fugiat harum quod soluta. Assumenda enim sequi beatae repellat excepturi est distinctio vel. Aut beatae voluptates maiores provident eveniet, ipsum culpa quam molestiae sapiente sint ratione, minima et illo dolores velit eos voluptatibus laudantium neque libero perferendis optio reprehenderit vitae quidem nisi. Accusamus, aliquid consequatur? Placeat amet laborum minima!"
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_post);
        }

        public static function find($slug)
        {
            $posts = static::all();

            return $posts->firstWhere('slug', $slug);
        }
}
