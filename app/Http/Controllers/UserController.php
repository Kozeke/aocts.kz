<?php

namespace App\Http\Controllers;

use App\UserDocument;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Storage;

class UserController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request){
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'BIN' => 'required|unique:users',
            'manager_name' => 'required',
            'manager_phone' => 'required|unique:users',
            'company_email' => 'required|email|unique:users',
            'locality_id' => 'required',
            'address' => 'required',
            'password' => 'required',
            'document' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }
        $file = $request->file('document');
        if ($file->getClientOriginalExtension() === "pdf") {
            $url = Storage::putFile('public/user_documents', new File($file));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
        } else {
            return response()->json(['document'], 422);

        }
        if($request->file('document1')){
            $file = $request->file('document1');
            if ($file->getClientOriginalExtension() === "pdf") {
                $url = Storage::putFile('public/user_documents', new File($file));
                $text = url('/') . '/storage/app/public/' . substr($url, 7);
            } else {
                return response()->json(['document'], 422);
            }
        }
        if($request->file('document2')){
            $file = $request->file('document2');
            if ($file->getClientOriginalExtension() === "pdf") {
                $url = Storage::putFile('public/user_documents', new File($file));
                $text = url('/') . '/storage/app/public/' . substr($url, 7);
            } else {
                return response()->json(['document'], 422);
            }
        }
//        if($input['document']){
//            $exploded=explode('/', $input['document']);
//            $exploded2=explode('.', $exploded[5]);

//            if($exploded2[1]==='pdf'){
                $input['password'] = bcrypt($input['password']);
                $user = User::create([
                    "address" => $input["address"],
                    "manager_name" => $input["manager_name"],
                    "manager_phone" => $input["manager_phone"],
                    "company_email" => $input["company_email"],
                    "BIN" => $input["BIN"],
                    "name"=>$input["name"],
                    "phone"=>$input["phone"],
                    "password"=>$input["password"],
                    "email"=>$input["email"],
                    "locality_id" => $input["locality_id"],
                    "role_id"=>2//role of user
                ]);
                UserDocument::create([
                    'user_id'=>$user->id,
                    'title' => $text
                ]);
//            }else{
//                return response()->json(['image'], 422);
//            }
        $success['user'] =  $user;
        return response()->json(['success'=>$success], $this-> successStatus);
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            //$success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['user'] = $user;
            if ($user['approved'] == 1) {
                return response()->json(['success' => $success], $this->successStatus);

            } else {
                return response()->json(['error' => 'Not validated'], 402);

            }
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
