<?php

namespace App\Http\Controllers;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostCreateController extends Controller
{
    public function view()
    {
        return view("postCreate");
    }

    public function store(Request $request)
    {
        //Save image

        $imageExtension = $request->image->getClientOriginalExtension();
        $timestamp = Carbon::now()->timestamp;
        $userId = auth()->user()->id;
        $newImageName = $userId."_".$timestamp.".".$imageExtension;

        Storage::putFileAs("public/articles/author".$userId,$request->image,$newImageName,);


        $newPost = News::create([
            "user_id" => auth()->user()->id,
            "category_id" => 1,
            "title" => $request->title,
            "text" => $request->text,
            "image" => "/storage/articles/author".$userId."/".$newImageName,
        ]);



        return redirect(route("post",$newPost->id));
    }

}
