<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

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
    }

}
