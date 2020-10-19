<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        if(!$token = auth()->attempt($creds)){
            return response()->json(['error' => 'Incorrect email/password', 401]);
        }

        return response()->json(['token' => $token]);
    }
    public function me()
    {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $me = User::where('id', auth()->user()->id)->with(['documents','agreements','bank_requisites'])->get();
        return response()->json(['user'=>$me]);
    }


}
