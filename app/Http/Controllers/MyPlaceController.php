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
        $query = News::query();
        $categoriesId = Categories::pluck('id');
        $categoryArr = [];
        foreach ($categoriesId as $id)
        {
            if(request()->has($id))
            {
                $categoryArr[] = $id;
            }

        }

        if(count($categoryArr) > 0)
        {
            $news = $query->whereIn('category_id',$categoryArr)->paginate(12);
        }
        else
        {
            $news = News::query()->paginate(12);
        }




        return view('categoryAll',
            [
                'news'=>$news,
            ]);
    }


    public function about()
    {
        return view('about',
            [
            ]);

    }


}
