<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::query()->paginate(10);
        return view("admin.index",
        [
            "users"=>$users,
        ]);
    }

    public function delete(Request $request)
    {
        User::destroy($request->userId);
        return back()->with('success','The message has been added');
    }

}
