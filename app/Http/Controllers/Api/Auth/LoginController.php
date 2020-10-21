<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['BIN', 'password']);

        if($token = auth()->attempt($creds)){
            return response()->json(['token' => $token]);

        }
        return response()->json(['error'=>'Incorrect email/password'], 401);


    }
    public function me()
    {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $me = User::where('id', auth()->user()->id)->with(['documents','bank_requisites','applications.agreements','juridical_locality','real_locality'])->get();
        return response()->json(['user'=>$me]);
    }

    public function changePassword(Request $request)
    {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }

        $current_password = User::where('id',$request['id'])->pluck('password');
        if (Hash::check($request['current_password'], $current_password[0])) {
            $user_id = $request['id'];
            $obj_user = User::find($user_id);
            $obj_user->password = bcrypt($request->get('new_password'));
            $obj_user->save();
            return response()->json(['success'], 200);
        } else {
            $error = array('current_password' => 'Please enter correct current password');
            return response()->json(array('error' => $error), 400);


        }
    }

}
