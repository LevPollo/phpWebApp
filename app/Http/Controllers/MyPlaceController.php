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

    public function setNews()
    {
        return News::all();
    }

    public function main()
    {

        return view('index',
            [
                'news'=>$this->setNews(),

            ]);
    }

    public function category(int $id = null)
    {

        return view('category',
            [
                'news'=>$this->setNews(),
                'categoryId'=>$id,
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
//        dd($post);

      return view('post',
        [
            'news'=>$this->setNews(),
            'postId'=>$id,
            'thisPost'=>$thisPost ,

        ]);
    }







    public function profile()
    {


        return view('profile');
    }

    public function about()
    {
        return view('about',
            [
            ]);

    }


}
