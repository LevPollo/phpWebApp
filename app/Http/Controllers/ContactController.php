<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Mail\ContactForm;
use App\Mail\Spammer;
use App\Models\FeedbackMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to("pollolev@gmail.com")->send(new Spammer());

        return back()->with('success','The message has been added');







    }




}
