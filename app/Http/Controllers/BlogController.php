<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
use App\Models\Comments;

 
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function allPosts() {
        $posts = Post::all();
        return view('blog', ['posts' => $posts]);
    }

    public function OnePost($id) {
        $posts = Post::all();
        $user = User::all();
        $comments = Comments::all();
        return view('post', [
            'post' => $posts->find($id),
            'comments' => $comments
        ]);
    }

}
