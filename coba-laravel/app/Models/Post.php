<?php

namespace App\Models;




class Post 
{
    private static $blog_posts = [
        [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-post-pertama",
        "author" => "Yoghi Prasetiyo",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugiat alias a soluta. Nobis harum quisquam officiis ratione dolor et in illum voluptatibus error maiores porro exercitationem, aliquid vero magnam similique accusantium delectus sequi voluptates qui ut earum labore perferendis obcaecati praesentium. Quod veniam, dolor repellat dolores dicta excepturi exercitationem quis nisi. Vel obcaecati iusto, labore ratione placeat expedita impedit eos? Explicabo obcaecati possimus numquam nulla porro unde quod, aliquam, libero corrupti sapiente itaque delectus excepturi rerum quis earum reiciendis?"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "Judul-post-kedua",
        "author" => "OkyBoy",
        "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum accusamus iusto quos et sed, nesciunt magnam error. Cum nostrum, vero quasi voluptatum deleniti quas dolorem hic saepe dolor tempore tempora ullam libero adipisci porro corrupti ducimus? Rerum, inventore blanditiis. Aut possimus, praesentium atque ad doloremque harum officiis dolorem doloribus sed et, alias omnis, enim fugit laborum totam ipsam placeat molestias numquam suscipit! Rem nostrum, non unde, autem a obcaecati laudantium quae dolores mollitia, blanditiis repudiandae ad dolorem! Rerum natus est fugit, consequatur rem possimus commodi. Amet facilis quos quidem iure quo distinctio repellendus similique officiis magni laboriosam, quas incidunt eligendi."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);

    }

    public static function find($slug)
    {
        $posts = static::all();
    //     $posts = [];
    //     foreach($posts as $p) {
    //      if($p["slug"] === $slug) {
    //         $post = $p;
    //      }
    //   }

      return $posts->firstWhere('slug' , $slug);
    }
}
