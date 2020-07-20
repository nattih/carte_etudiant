<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function sendMailView(){
        return view('send_mail');
    }

    public function sendMail(Request $request){
        $email=$request->to;
        $title=$request->title;
        $body=$request->body;
       
        $data=[
            'email'=>$email,
            'title'=>$title,
            'body'=>$body
        ];

        \Mail::to($email)->send(new \App\Mail\ExapleMail($data) );
        dd('Mail  Envoyer avec succes');

    }
}
