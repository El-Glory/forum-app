<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Notifications\NewComment;

class CommentController extends Controller
{
    public function store(Request $request, User $user, Post $post)
    {
        //dd(auth()->user()->name);
        if (!auth()->user()) {
            $this->validate($request, [
                'name' => 'max:255',
            ]);
        }

        $this->validate($request, [
            'body' => 'required'
        ]);


        $comment = new Comment();
        $comment->name = !auth()->user() ? $request->name : auth()->user()->name;
        $comment->body = $request->body;
        $comment->post_id = $post->id;
        $comment->user()->associate($request->user());
        $comment->save();

        $post->user->notify(new NewComment($post));


        return back();
    }
}
