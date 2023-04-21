<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInformation;
use App\Models\UserPermissions;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        $users = User::all();
        $email = "eleanore49@example.org";
//        dd(User::where("email",$email)->exists());

        return Socialite::driver("google")->redirect();

    }
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver("google")->user();


        if(User::where("email",$googleUser->email)->exists())
        {
            $AuthUser = User::where("email",$googleUser->email)->first();
        }
        else
        {
            $AuthUser= User::create([
                "name" => $googleUser->name,
                "email" => $googleUser->email,
                "email_verified_at" => Carbon::now()->timestamp,
            ]);

            $userInformation = UserInformation::create([
                "user_id" => $AuthUser->id,
                "avatar" => $googleUser->avatar,
            ]);
            $userPermission = UserPermissions::create([
                "user_id" => $AuthUser->id,
            ]);


        }
        Auth::login($AuthUser);

        return redirect()->route('main');
    }
}
