<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{

    public $subject = "メールの件名";
    public $name = "あなたのおなまえ";
    public $email = "example@example.com";

    //
    public function index(Request $request)
    {

        $data = array(
            "name" => $request->name,
            "year" => $request->year,
            "work" => $request->work,
            "child" => $request->child,
            "message" => $request->message,
            "mail" => $request->mail,
            "twitter" => $request->twitter,
        );
        Mail::send('mail.send', compact("data"), function($message){
            $message->to($this->email, $this->name)
                ->subject($this->subject);
        });

        //
        $message = "お嫁に応募しました！みんなも応募しよう！https://あなたのWebサイト";
        $tweet = urlencode($message);

        return view("success",compact("tweet"));

    }

}
