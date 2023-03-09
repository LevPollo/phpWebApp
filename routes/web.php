<?php

use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/messages',[MyPlaceController::class,'messages'] );
Route::get('/category',  [MyPlaceController::class, 'category'])->name('category');
Route::get('/contact',  [Controllers\MyPlaceController::class, 'contact'])->name('contact');
Route::get('/single',  [Controllers\MyPlaceController::class, 'single'])->name('single');
Route::get('/about',[MyPlaceController::class,'about'])->name('about');


Route::get('/index',function (){
    return view('index');
});

