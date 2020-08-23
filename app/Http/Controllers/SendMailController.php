<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\New_;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $this->validate($request ,
        [
            'email'=>'required | email',
            'message' => 'required'

        ]);

            $email = $request->email;
            $message = $request->message;
            $type = $request->type;

            Mail::to($email)->send(new SendMail($type,$message));
        return "ok";
    }
}
