<?php

namespace App\Http\Controllers;

use App\Http\Requests\commentForm;
use App\Models\Comments;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function post(int $id = null)
    {
        $thisPost = News::where('id',$id)->first();

        return view('post',
            [
                'postId' => $id,
                'thisPost' => $thisPost,
            ]);
    }

    public function sendComment($id, commentForm $request)
    {
        $post = News::findOrFail($id);

        $validated = $request->validated();
        $newComment = Comments::create([
            'text' => $validated['text'],
            'user_id' => Auth::user()->id,
            'news_id' => $id,

        ]);

        return redirect(route("post",1));

    }

}
