<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comments;
use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public int $activePage = 1;
    public int $postLimit = 2;
    public int $pagesCount = 0;

    private function  setComments()
    {
        return Comments::all();
    }
    private function setCategories()
    {
        return Categories::all();
    }


    private function routeName()
    {
        return Route::getCurrentRoute()->getName();
    }
    public function __construct()
    {

        View::share('routeName', $this->routeName());
        View::share('setCategories', $this->setCategories());
        View::share('comments',$this->setComments());
        View::share('postLimit',$this->postLimit);
        View::share('pagesCount',$this->pagesCount);
        View::share('activePage',$this->activePage);

    }

}
