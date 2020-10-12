<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Reminder;
use App\User;
use Mail;
use Illuminate\Support\Facades\Auth;


class ForgotPasswordController extends Controller
{
    public function forgot(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user==null){
            return response()->json(['Email not exists'], 422);}
        $user = Sentinel::findById($user->id);

        $reminder = Reminder::exists($user) ?  : Reminder::create($user);
        $this->sendEmail($user, $reminder->code);

        return response()->json(['success'], 200);
    }

    public function sendEmail($user, $code){
        Mail::send('email.forgot',
        ['user'=>$user,'code'=>$code],
        function($message) use ($user){

            $message->to($user->email);
            $message->subject(" reset your password.");
        });
    }

    public function reset($email, $code){
        $user = User::where('email',$email)->first();
        if($user==null){
            echo 'email not exists';
        }
        $user = Sentinel::findById($user->id);

        $reminder = Reminder::where([
            ['completed',0],['user_id',$user->id]
            ])->pluck('code');
        // dd($reminder);

        if($reminder) {
            if ($code == $reminder[0]) {
//                $success['user'] =  $user;
//                $success['code'] =  $code;
//                return response()->json(['success'=>$success], $this-> successStatus);
                return view('security.reset_password_form')->with(['user'=>$user, 'code'=>$code]);
            } else {
                return redirect('/');
            }
        }else{
            echo 'time expired';
            }
    }

    public function resetPassword(Request $request, $email, $code){
        $this->validate($request, [
            'password' => 'required|min:7|max:12|confirmed',
            'password_confirmation' =>'required|min:7|max:12'
        ]);
        $user = User::where('email',$email)->first();
        if($user==null){
            echo 'email not exists';
        }
        $user = Sentinel::findById($user->id);

        $reminder = Reminder::where('user_id',$user->id)->pluck('code');
        // dd($reminder);
        if($reminder) {
            if ($code == $reminder[0]) {
                Reminder::complete($user, $code, $request->password);
                return redirect('/login')->with('success','Password reset. Please login with new password.');
//                $success['user'] =  $user;
//                $success['code'] =  $code;
//                return response()->json(['success'=>$success], $this-> successStatus);
            } else {
                return redirect('/');
            }
        }else{
            echo 'time expired';
        }
    }
    
}
