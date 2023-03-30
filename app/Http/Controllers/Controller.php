<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Comments;
use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function setNews()
    {
        return News::all();
    }

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

        View::share('news', $this->setNews());
        View::share('routeName', $this->routeName());
        View::share('setCategories', $this->setCategories());
        View::share('comments',$this->setComments());


    }

}
