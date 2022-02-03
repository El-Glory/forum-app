<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class addDiscussionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return view('addDiscussion');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        session()->flash('success', 'You have succesfully started a discussion');
        return back();
    }
}
