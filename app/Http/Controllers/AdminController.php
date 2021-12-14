<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class AdminController extends Controller
{
    public function allPosts() {
        $posts = Post::all();
        return view('admin', ['posts' => $posts]);
    }

    public function postDelete($id) {
        Post::find($id)->delete();
        return redirect()->route('admin');
    }
}
