<?php

namespace App\Http\Controllers;
use App\Http\Requests\CommentRequest;

use Illuminate\Support\Facades\Auth;
use App\Models\Comments;

use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function submit(Request $req, $id) {
        $user = Auth::user();

        $comment = new Comments();
        $comment->postId = $id;
        $comment->userName = $user->name;

        $comment->text = $req->text;

        $comment->save();

        return redirect()->route('blog');
    }

    // public function submit(Request $req) {
    //     $user = Auth::user();

    //     $comment = new Comments();
    //     $comment->userId = $user->id;
    //     $comment->userName = $user->name;

    //     $comment->text = $req->text;

    //     $comment->save();

    //     return redirect()->route('blog');
    // }
}
 