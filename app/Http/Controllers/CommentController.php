<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function add(AddCommentRequest $request)
    {
        $c = new Comment();
        $c->text = $request->comment;
        $c->user_id = Auth::user()->getAuthIdentifier();
        $c->drink_id = $request->route('id');
        $c->save();
        return back();
    }
}
