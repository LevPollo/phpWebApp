<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PostCreateController extends Controller
{
    public function view()
    {
        return view("postCreate");
    }

    public function store(Request $request)
    {


        $newPost = News::create([
            "user_id" => auth()->user()->id,
            "category_id" => 1,
            "title" => $request->title,
            "text" => $request->text,
            "image" => "/images/article_images/articleImg (19).jpg"
        ]);



        return redirect(route("post",$newPost->id));
    }

}
