<?php

namespace App\Http\Controllers;

use App\Http\Requests\changeProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile');
    }



    public function changeInfo()
    {

        return view('auth.change',[
            'authUser'=> Auth::user(),
            ]);

    }

    public function changeSave(changeProfile $request)
    {
//        $validated = $request->validated();

        $userInformation = Auth::user()->information;
        $user = Auth::user();

//        $user->name = $validated['name'];
//        $user->password = Hash::make($validated['password']);
//        $user->phone = $validated['phone'];
//        $user->email = $validated['email'];
//        $user->save();

        $userInformation->first_name = $request->firstname;
        $userInformation->last_name = $request->lastname;
        $userInformation->age = $request->age;
        $userInformation->country = $request->country;
        $userInformation->city = $request->city;
        $userInformation->address = $request->address;
        $userInformation->avatar = $request->avatar;

        $userInformation->save();

        return back()->withInput();
    }

}
