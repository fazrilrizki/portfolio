<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        Mail::to('fazrilrizkitantoadji@gmail.com')->locale(app()->getLocale())->send(new MailNotify($request->name, $request->email, $request->pesan));
    }
}
