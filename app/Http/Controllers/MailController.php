<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($request->name, $request->email, $request->message));
        return redirect()->route('home');
    }
}
