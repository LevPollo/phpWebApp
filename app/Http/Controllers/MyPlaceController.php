<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\News;
use App\Models\Tags;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\ErrorHandler\Collecting;

class




MyPlaceController extends Controller


{



    public function main()
    {

        return view('indexTwo');
    }

    public function category(int $id = null)
    {

        return view('category',
            [
                'news'=>$this->setNews(),
                'categoryId'=>$id,
            ]);
    }
    public function categoryAll()
    {
        return view('categoryAll',
            [
                'news'=>$this->setNews(),
            ]);
    }
    public function post(int $id = null)
    {
        $thisPost = null;
        foreach ($this->setNews() as $post){
            if($post->id == $id){
                $thisPost = $post;
            }
        }


      return view('post',
        [

            'postId'=>$id,
            'thisPost'=>$thisPost ,

        ]);
    }

    public function about()
    {
        return view('about',
            [
            ]);

    }


}
