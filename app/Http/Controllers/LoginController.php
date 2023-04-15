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

        if (Auth::attempt($request->only('email', 'password')))
        {
            if (!$request->user()->hasVerifiedEmail())
            {

                return view("auth.verify-email");
            }
            return redirect('profile');
        }
        return redirect(route("login"))->withErrors([
            "formError" => "This account not found"
        ]);
    }
}
