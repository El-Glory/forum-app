<?php

use App\Http\Controllers\addDiscussionController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// })->name('home');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [PostController::class, 'index'])->name('posts');
Route::delete('/dashboard/{post}', [PostController::class, 'destroy'])->name('post.destroy');
Route::post('/posts/{post}/likes', [PostController::class, 'postLike'])->name('posts.likes');
Route::post('{post:title}/comment/', [CommentController::class, 'store'])->name('comment.add');
Route::get('/posts/{post:title}', [PostController::class, 'show'])->name('posts.show');

Route::get('/add-discussion', [addDiscussionController::class, 'index'])->name('addDiscussion');
Route::post('/add-discussion', [addDiscussionController::class, 'store']);
