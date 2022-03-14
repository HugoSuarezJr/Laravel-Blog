<?php

namespace App\Models;

class Post {

    public static function find($slug){

        if(!file_exists($path = resource_path("posts/{$slug}.html"))){
            throw new ModelNotFoundException();
        }   
        cache()->remember("posts.{$slug}", now()->addMinutes(20), function() use($path){
            return file_get_contents($path);
        });
    }

}

