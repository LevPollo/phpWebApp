<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    private function getAuth()
    {
        return [
            'authId'=>Auth::user()->id,
            'authName'=>Auth::user()->name,
            'authInfo'=>Auth::user()->information,
            'authPassword'=>Auth::user()->password,
            ];
    }

    public function profile()
    {

        return view('profile',$this->getAuth());
    }
    public function changeInfo()
    {

        return view('auth.change',$this->getAuth());

    }

    public function changeSave(Request $request)
    {

//            $request->validate([
//                'name' => 'required|string', //не делает проверку
//                'email' => 'required|string|email|unique:users', //проверяем таблицу user на совпадение ящиков
//                'password' => 'required|confirmed|min:8' // проверка на свопадение паролей
//            ]);

        $userInformation = Auth::user()->information;
        $user = Auth::user();

        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        $userInformation->first_name = $request->firstname;
        $userInformation->last_name = $request->lastname;
        $userInformation->age = $request->age;
        $userInformation->country = $request->country;
        $userInformation->city = $request->city;
        $userInformation->address = $request->address;
        $userInformation->avatar = $request->avatar;
        $userInformation->save();


    }

}
