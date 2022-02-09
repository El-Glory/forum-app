<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index', 'show');
    }
    public function index()
    {
        $posts = Post::latest();
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

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function destroy(Post $post)
    {

        $post->delete();
        return back();
    }
}
