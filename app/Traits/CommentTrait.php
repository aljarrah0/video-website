<?php

namespace App\Traits;

use App\Http\Requests\BackEnd\CommentRequest;
use App\Models\Comment;

trait CommentTrait
{
    public function commentStore(CommentRequest $request)
    {
        Comment::create(['user_id' => auth()->user()->id] + $request->validated());

        return redirect()->route('admin.videos.edit', [$request->video_id, '#comment']);
    }

    public function commentDelete($id)
    {
        $row = Comment::findOrFail($id);
        $row->delete();

        return redirect()->route('admin.videos.edit', [$row->video_id, '#comment']);
    }

    public function commentUpdate(CommentRequest $request, $id)
    {
        $row = Comment::findOrFail($id);
        $row->update($request->validated());

        return redirect()->route('admin.videos.edit', [$request->video_id, '#comment']);
    }
}
