<?php

namespace App\Http\Controllers;

use App\Mail\Spammer;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $mail = $request->email;

        Mail::to($mail)->send(new Spammer());
        Mail::to($mail)->send(new SuccessR());

    }
}
