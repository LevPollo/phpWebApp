<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


    public function create()
    {

        return view('auth.register');
    }

    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string', //не делает проверку
            'email' => 'required|string|email|unique:users', //проверяем таблицу user на совпадение ящиков
            'password' => 'required|confirmed|min:8' // проверка на свопадение паролей
        ]);
        $userInformation = UserInformation::create();


        $user = User::create([
            'name'=>$request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'token'=>$request->_token,
            'user_info_id'=>$userInformation->id,
        ]);







        Auth::login($user);

        return redirect('/profile');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('login');
    }
}
