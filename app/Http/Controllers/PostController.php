<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

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
     /**
     * Crea un post
     *
     * @param  int  $id
     * @return view posts.blog-single
     */
    public function create(Request $request){
        $categories = Category::pluck('name','id');
        $tags = Tag::pluck('name','id');
        $post = new Post();
        $post->name = $request->name;
        $post->slug = $request->slug;
        $post->extract = $request->extract;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = $request->user_id;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect('/boombcraft');
    }

    public function view(Request $request){
        $categories = Category::pluck('name','id');
        $tags = Tag::pluck('name','id');
        

        return view('posts.services', compact('categories','tags'));
    }

}
