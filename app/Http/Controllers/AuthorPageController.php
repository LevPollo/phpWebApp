<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDonationSubscriptions;
use App\Models\UserSubscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorPageController extends Controller
{
    public function index($id)
    {
        $author = User::find($id);
        return view("author_page",
        [
            "author" => $author,
        ]);
    }

    public function store(Request $request)
    {
       if($request->status == "true")
       {
           $newSub = UserSubscriptions::create([
               "user_id" => Auth::user()->id,
               "author_id" => $request->author_id,
           ]);
       }
       else
       {
           $unsub = UserSubscriptions::where("author_id",$request->author_id);
           $unsub->delete();
       }

       return redirect(route("author.page",$request->author_id));
    }

    public function donationStore(Request $request)
    {
        if($request->status == "true")
        {
            $newSub = UserDonationSubscriptions::create([
                "user_id" => Auth::user()->id,
                "author_id" => $request->author_id,
            ]);
        }
        else
        {
            $unsub = UserDonationSubscriptions::where("author_id",$request->author_id);
            $unsub->delete();
        }

        return redirect(route("author.page",$request->author_id));
    }
}
