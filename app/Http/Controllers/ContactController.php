<?php

namespace App\Http\Controllers;

use App\Models\FeedbackMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {

        return view('contact');
    }

    public function sendMessage(Request $request)
    {

//        $request->validate([
//            'email' => 'request|string|email'
//        ]);

        $feedBackMessage = FeedbackMessage::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);

        return redirect('/profile');


    }
//    public function sendMessage()
//    {
//        return view('profile');
//    }



}
