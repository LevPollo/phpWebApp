<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//домашня страница подтягивается через контрлллер майн
Route::get('/', [MyPlaceController::class,'main'])->name('main');

Route::get('/category/{id?}',  [MyPlaceController::class, 'category'])->name('category');

Route::get('/post{id}',[MyPlaceController::class,'post'])->name('post');
Route::get('/contact',  [MyPlaceController::class, 'contact'])->name('contact');
Route::get('/about',[MyPlaceController::class,'about'])->name('about');

Route::get('/profile',[MyPlaceController::class,'profile'])->middleware('auth')->name('profile');

Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('register');
Route::post('/register',[RegisterController::class,'save'])->middleware('guest');

Route::get('/login',[LoginController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'save'])->middleware('guest');


Route::get('/logout',[RegisterController::class,'logout']);




Route::get('/index',function (){
    return view('index');
});

//Route::get($url,$callback); - обычный запрос
//Route::get('url/{id}',function ($id)); - обычный запрос с динамичным индетификатором в адресе
//                                        ->where('id',$expression)
//Route::post($url,$callback); - форма с данными
//Route::match(['get','post'),$url,$callback) - объявление калбэка для массива из вида запросов
//Route::any($url,$callback) - для любого вида запроса
//Route::redirect($url,$toUrl,$code) - редирект с оденой страницы, на другую
//Route::permanentRedirect($url,$toUrl) - редирект без кода
//Route::view($url,$viewName, $variable[('myName'=>'Lev')]) - сразу открывает view.blade.php
