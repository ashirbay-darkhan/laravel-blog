<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

use App\Models\User;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function allPost() {
        $posts = Post::all();
        return view('postform', ['posts' => $posts]);
    }

    public function submit(PostRequest $req) {
        $user = Auth::user();

        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->imageUrl = $req->imageUrl;
        $post->userId = $user->id;
        $post->name = $user->name;
        $post->profile_image = $user->profile_image;

        $post->save();

        return redirect()->route('blog');
    }
}
