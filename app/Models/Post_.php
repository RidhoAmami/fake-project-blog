<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul Pertama",
            "author" => "Puja",
            "body" => "  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus soluta ea ipsum eligendi. Dicta eius, recusandae reiciendis facere, voluptatibus voluptatum repudiandae molestiae iste quasi aliquid perferendis. Illo omnis animi dolorum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul Kedua",
            "author" => "Bryan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis rem quis vitae numquam officiis, eveniet molestiae alias, provident sapiente ut non impedit temporibus deserunt nam, culpa laboriosam iusto ea at beatae et dolore earum minus magni? Perspiciatis itaque quasi distinctio autem numquam, voluptas laboriosam? Aut, illum. Aut, provident ut dignissimos, iure voluptate quidem ex inventore veniam sint at quisquam eaque sequi aperiam in, corrupti reprehenderit unde soluta deserunt? Id, aut labore obcaecati dolores beatae praesentium alias dolore quae iusto debitis, eos voluptatibus officia numquam culpa tenetur rerum inventore harum voluptates non magni illo. Nulla natus quis possimus quidem id minima!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
