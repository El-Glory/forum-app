<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, User $user, Post $post)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'body' => 'required'
        ]);


        $comment = new Comment();
        $comment->name = $request->name;
        $comment->body = $request->body;
        $comment->post_id = $post->id;
        $comment->user_id = auth()->user();



        $comment->save();
        dd($comment);

        return back();
    }
}
