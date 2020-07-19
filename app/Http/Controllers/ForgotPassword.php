<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Reminder;
use App\User;
use Mail;


class ForgotPassword extends Controller
{
    public function forgot(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user==null){
            return redirect()->back()->with(['error'=>'Email not exists']);
        }
        $user = Sentinel::findById($user->id);

        $reminder = Reminder::exists($user) ? : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);
        
        return redirect()->back()->with(['success'=>'Reset code sent to your email.']);
    }

    public function sendEmail($user, $code){
        Mail::send('email.forgot',
        ['user'=>$user,'code'=>$code],
        function($message) use ($user){
            
            $message->to($user->email);
            $message->subject(" reset your password.");
        });
    }
}
