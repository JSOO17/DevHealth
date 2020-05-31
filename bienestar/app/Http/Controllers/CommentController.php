<?php

namespace DevHealth\Http\Controllers;

use Illuminate\Http\Request;

use DevHealth\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	$comment = new Comment();
        $comment->name = $request->input('name');
        $comment->content = $request->input('comment');
        $comment->post_id = $request->input('post_id');
        $comment->save();

        return redirect('/posts/'.$request->input('post_id'));
    }
}
