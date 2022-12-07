<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = Comment::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => 1,
//            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back();

        /*$post = Post::find($request->post_id);
        $post->comments()->create([
            'body' => $request->body,
            'user_id' => $request->user_id
        ]);*/
    }
}
