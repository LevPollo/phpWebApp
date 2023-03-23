<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }

    public function save(Request $request)
    {

        $request->validate([

            'email' => 'required|string|email', //проверяем таблицу user на совпадение ящиков
            'password' => 'required|string' // проверка на свопадение паролей
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return view('profile');
        }
        return back()->withInput();

    }

}
