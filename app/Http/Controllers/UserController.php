<?php

namespace App\Http\Controllers;

use App\UserDocument;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Storage;
use Hash;

class UserController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request)
    {
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
            return response()->json(['error' => $validator->errors()], 422);
        }
        $file = $request->file('document');
        if ($file->getClientOriginalExtension() === "pdf") {
            $url = Storage::putFile('public/user_documents', new File($file));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
        } else {
            return response()->json(['document'], 422);

        }
        if ($request->file('document1')) {
            $file = $request->file('document1');
            if ($file->getClientOriginalExtension() === "pdf") {
                $url = Storage::putFile('public/user_documents', new File($file));
                $text = url('/') . '/storage/app/public/' . substr($url, 7);
            } else {
                return response()->json(['document'], 422);
            }
        }
        if ($request->file('document2')) {
            $file = $request->file('document2');
            if ($file->getClientOriginalExtension() === "pdf") {
                $url = Storage::putFile('public/user_documents', new File($file));
                $text = url('/') . '/storage/app/public/' . substr($url, 7);
            } else {
                return response()->json(['document'], 422);
            }
        }
        if ($request->file('document3')) {
            $file = $request->file('document3');
            if ($file->getClientOriginalExtension() === "pdf") {
                $url = Storage::putFile('public/user_documents', new File($file));
                $text = url('/') . '/storage/app/public/' . substr($url, 7);
            } else {
                return response()->json(['document'], 422);
            }
        }
        if ($request->file('document4')) {
            $file = $request->file('document4');
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
            "name" => $input["name"],
            "phone" => $input["phone"],
            "password" => $input["password"],
            "email" => $input["email"],
            "locality_id" => $input["locality_id"],
            "role_id" => 2//role of user
        ]);
        UserDocument::create([
            'user_id' => $user->id,
            'title' => $text
        ]);
//            }else{
//                return response()->json(['image'], 422);
//            }
        $success['user'] = $user;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            //$success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['user'] = $user;
//            if ($user['approved'] == 1) {
            return response()->json(['success' => $success], $this->successStatus);

//            } else {
//                return response()->json(['error' => 'Not validated'], 402);
//
//            }
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

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
        $user = User::findOrFail($request['id']);

        $user->name = $request['name'];
        $user->phone = $request['phone'];
        $user->manager_name = $request['manager_name'];
        $user->email = $request['email'];
        $user->save();
        return response()->json(['success', 200]);

    }

    public function userData(Request $request)
    {
        return User::where('id', $request['id'])->with('documents')->get();
    }

    public function changePassword(Request $request)
    {

        $current_password = User::where('id',$request['id'])->pluck('password');
        if (Hash::check($request['current_password'], $current_password[0])) {
            $user_id = $request['id'];
            $obj_user = User::find($user_id);
            $obj_user->password = bcrypt($request->get('new_password'));
            $obj_user->save();
            return response()->json(['success', 200]);
        } else {
            $error = array('current_password' => 'Please enter correct current password');
            return response()->json(array('error' => $error), 400);


        }
    }
}
