<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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
//1)Доработать проверку при регистрации
//2)Сделать проверку при смене данных
//3)Напсать метод отвечающий за элементов на странице и кол-во страниц
//4)Придумать главную страницу
//5)Доделать проверку формыar

Route::get('/', [MyPlaceController::class,'main'])->name('main');

Route::get('/categoryall',  [MyPlaceController::class, 'categoryAll'])->name('categoryAll');
Route::get('/category/{id?}',  [MyPlaceController::class, 'category'])->name('category');

Route::get('/post{id}',[PostController::class,'post'])->name('post');
Route::post('/post{id}',[PostController::class,'sendComment'])->middleware('auth');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'sendMessage']);

Route::get('/about',[MyPlaceController::class,'about'])->name('about');

Route::get('/profile',[ProfileController::class,'profile'])->middleware('auth')->name('profile');

Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('register');
Route::post('/register',[RegisterController::class,'save'])->middleware('guest');

Route::get('/login',[LoginController::class,'login'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'save'])->middleware('guest');


Route::get('/logout',[RegisterController::class,'logout'])->name('logout');

Route::get('/profile/change',[ProfileController::class,'changeInfo'])->middleware('auth')->name('profile_change');
Route::post('/profile/change',[ProfileController::class,'changeSave']);







//Route::get($url,$callback); - обычный запрос
//Route::get('url/{id}',function ($id)); - обычный запрос с динамичным индетификатором в адресе
//                                        ->where('id',$expression)
//Route::post($url,$callback); - форма с данными
//Route::match(['get','post'),$url,$callback) - объявление калбэка для массива из вида запросов
//Route::any($url,$callback) - для любого вида запроса
//Route::redirect($url,$toUrl,$code) - редирект с оденой страницы, на другую
//Route::permanentRedirect($url,$toUrl) - редирект без кода
//Route::view($url,$viewName, $variable[('myName'=>'Lev')]) - сразу открывает view.blade.php
