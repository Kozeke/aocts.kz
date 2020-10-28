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
            'juridical_locality_id' => 'required',
            'real_locality_id' => 'required',
            'real_address' => 'required',
            'juridical_address' => 'required',
            'BIN' => 'required|unique:users,BIN,'.$request['id'],
            'company_email' => 'required|email|unique:users,company_email,'.$request['id'],
            'id' => 'required',
            'name_of_company' => 'required',
            'type_of_agency' => 'required'
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
        $user->type_of_agency = $request['type_of_agency'];
        $user->BIN = $request['BIN'];
        $user->name_of_company = $request['name_of_company'];
        $user->juridical_locality_id = $request['juridical_locality_id'];
        $user->real_locality_id = $request['real_locality_id'];
        $user->juridical_address = $request['juridical_address'];
        $user->real_address = $request['real_address'];
        $user->company_email = $request['company_email'];
        $user->save();
        $me = User::where('id', auth()->user()->id)->with(['documents','bank_requisites','applications.agreements'])->get();

        return response()->json(['user', $me], 200);

    }

    public function updateContacts(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'manager_name' => 'required',
            'phone' => 'required|unique:users,phone,'.$request['id'],
            'email' => 'required|email|unique:users,email,'.$request['id'],
            'performer_name' => 'required'
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

        $user->performer_name = $request['performer_name'];
        $user->phone = $request['phone'];
        $user->manager_name = $request['manager_name'];
        $user->email = $request['email'];
        $user->save();
        $me = User::where('id', auth()->user()->id)->with(['documents','bank_requisites','applications.agreements'])->get();

        return response()->json(['user', $me], 200);


    }
    public function uploadImage(Request $request)
    {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $file = $request->file('image');
        // Log:info( $file->getClientOriginalExtension());
        if($file->getClientOriginalExtension()==="pdf"||$file->getClientOriginalExtension()==="png"||$file->getClientOriginalExtension()==="jpg"||$file->getClientOriginalExtension()==="jpeg"){
            $url = Storage::putFile('public/user_photos', new File($file));
            $text = url('/').'/storage/app/public/user_photo/'.substr($url,7);
            $user=User::find($user->id);
            $user->user_photo=$text;
            return response()->json(['image'=>$text],200);
        }
        else{
            return response()->json(['image'], 422);

        }
    }
}

