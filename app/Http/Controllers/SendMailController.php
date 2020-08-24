<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\New_;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function index()
    {
        return view('emails.contact');
    }

    public function send(Request $request)
    {
        $this->validate($request ,
        [
            'email'=>'required | email',
            'type' => 'required',
            'message' => 'required'

        ]);

        $data = array(
            'email'      =>  $request->email,
            'type'      =>  $request->type,
            'message'   =>   $request->message
        );

     Mail::to('company@softchallengers.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
