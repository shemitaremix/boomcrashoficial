<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Muestra todos los posts
     *
     * @return view posts.index
     */
    public function index()
    {
        $posts = Post::where('status',2)->latest('id')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Muestra un post
     *
     * @param  int  $id
     * @return view posts.blog-single
     */
    public function show(Post $post){
        $similares = Post::where('category_id',$post->category_id)->where('status',2)->latest('id')->where('id','!=',$post->id)->get();
        return view('posts.blog-single', compact('post','similares'));
    
    }

}
