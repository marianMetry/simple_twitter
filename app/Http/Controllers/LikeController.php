<?php

namespace App\Http\Controllers;

use App\Models\Post;

class LikeController extends Controller
{
    public function likeOrDislike($id)
    {
        if (!auth()->user()->isLikedBy($id))
            auth()->user()->likes()->attach($id);
        else
            auth()->user()->likes()->detach($id);
        return response()->json([
            'success' => true,
            'message' => 'Successfully',
            'data' => Post::query()->select('id')->withCount('likes')->find($id)
        ]);
    }
}
