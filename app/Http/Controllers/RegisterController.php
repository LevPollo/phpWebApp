<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Models\User;
use App\Models\UserInformation;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


    public function create()
    {

        return view('auth.register');
    }

    public function save(registerRequest $request)
    {

        $validated = $request->validated();


        $user = User::create([
            'name'=>$validated['name'],
            'email'=> $validated['email'],
            'password'=>Hash::make($validated['password']),
            'phone'=>$validated['phone'],
            'token'=>$request->_token,

        ]);

        $userInformation = UserInformation::create([
            "user_id" => $user->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route("profile"));
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('login');
    }
}
