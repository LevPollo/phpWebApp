<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use PhpParser\ErrorHandler\Collecting;

class MyPlaceController extends Controller


{

    public function setNews()
    {
        return News::all();
    }


    public function main()
    {

       // $categories



        return view('index',
            [
                'news'=>$this->setNews()
            ]);

    }

    public function category()
    {

        $categories = Categories::all();
        return view('category',
            [
                'news'=>$this->setNews()
            ]);

    }

    public function contact()
    {

        return view('contact',
            [
            ]);

    }



    public function about()
    {
        return view('about',
            [
            ]);

    }


}
