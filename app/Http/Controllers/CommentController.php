<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create(Request $request, string $id)
    {
        $comment = new Comment();
        $comment->job_application_id = $id;
        $comment->user_id = $request->user()->id;
        $comment->description = $request->comment;
        $comment->save();
        return to_route('comment.create', ['id' => $id]);
        
    }
}
