<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Storage;
use Hash;
use App\UserDocument;
use Illuminate\Http\File;

class UserController extends Controller
{
    public function updateMain(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'locality_id' => 'required',
            'address' => 'required',
            'BIN' => 'required  ',
            'company_email' => 'required|email|unique:users',
            'id' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $user = User::findOrFail($request['id']);
        $user->BIN = $request['BIN'];
        $user->address = $request['address'];
        $user->locality_id = $request['locality_id'];
        $user->company_email = $request['company_email'];
        $user->save();
        return response()->json(['success', 200]);

    }

    public function updateContacts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'manager_name' => 'required',
            'phone' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $user = User::findOrFail($request['id']);

        $user->name = $request['name'];
        $user->phone = $request['phone'];
        $user->manager_name = $request['manager_name'];
        $user->email = $request['email'];
        $user->save();
        return response()->json(['success', 200]);

    }

}
