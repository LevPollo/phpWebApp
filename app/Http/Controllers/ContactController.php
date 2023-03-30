<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Models\FeedbackMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {

        return view('contact');
    }

    public function sendMessage(contactRequest $request)
    {

        $validated = $request->validated();

        $feedback = FeedbackMessage::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);


        return back()->with('success','The message has been added');


    }




}
