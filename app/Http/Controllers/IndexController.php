<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function allPosts() {
        return view('index', ['posts' => Post::all()]);
    }
}
