<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(User $user, Post $post)
    {
        $posts = auth()->user()->posts;
        // $posts = Post::latest()->paginate();
        return view('auth.dashboard', [
            'posts' => $posts
        ]);
    }
}
