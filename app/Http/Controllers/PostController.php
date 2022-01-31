<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
    }
    public function index()
    {
        $posts = Post::latest()->paginate();
        //Get all posts and return(view) the,
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function postLike(Post $post, Request $request)
    {
        if (!$post->likedBy($request->user())) {
            $post->likes()->create([
                'user_id' => $request->user()->id,
            ]);

            return back();
        }
        return back();
    }
}
