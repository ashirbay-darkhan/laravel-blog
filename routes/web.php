<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'allPosts'])->name('index');

Route::get('/dashboard', function () {
    return view('blog');
})->middleware(['auth'])->name('/dashboard');


// UserController
Route::get('/profile', [UserController::class, 'edit'])->name('profile');

// Posts 
Route::get('/posts', [PostController::class, 'allPost'])->name('new-post');
Route::post('/posts/submit', [PostController::class, 'submit'])->name('post-submit');

// update Profile 
Route::put('/users/profile', [UserController::class, 'update'])->name('user.edit-profile');


// Blog posts
Route::get('/blog/{id}', [BlogController::class, 'OnePost'])->name('onePost');
Route::get('/blog', [BlogController::class, 'allPosts'])->name('blog');
Route::get('/dashboard', [BlogController::class, 'allPosts'])->name('blog');


// Comments
Route::post('/blog/{id}/submit', [CommentsController::class, 'submit'])->name('comment-submit');


// Admin
Route::get('/admin', [AdminController::class, 'allPosts'])->name('admin');

Route::get('/admin/{id}/delete', [AdminController::class, 'postDelete'])->name('post-delete');


require __DIR__.'/auth.php';
