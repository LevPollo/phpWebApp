<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
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

    public function save(loginRequest $request)
    {

        $request->validated();

        if (Auth::attempt($request->only('email', 'password'))) {

            return redirect('profile');
        }
        return back()->withInput();

    }
}
