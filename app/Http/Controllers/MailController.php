<?php

namespace App\Http\Controllers;

use App\Mail\Spammer;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        //отправляем на почту класс из шаблона письма
        Mail::to("l3vanderson@yandex.ru")->send(new Spammer());

        return view('indexTwo');

    }
}
