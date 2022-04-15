<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(9)->withQueryString()
        ]);
    }
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create(Post $post){
        return view('posts.create');
    }


}
