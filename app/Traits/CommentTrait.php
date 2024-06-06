<?php

namespace App\Traits;

use App\Http\Requests\BackEnd\CommentRequest;
use App\Models\Comment;

trait CommentTrait
{
    public function commentStore(CommentRequest $request)
    {
        Comment::create(['user_id' => auth()->user()->id] + $request->validated());

        return redirect()->back();
    }
}
