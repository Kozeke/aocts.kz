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
            'name_of_company' => 'required',
            'resident_of_RK' => 'required',
            'BIN' => 'required|unique:users',
            'manager_name' => 'required',
            'company_email' => 'required|email|unique:users',
            'password' => 'required',
            'code' => 'required',
            'country' => 'required',
            'type_of_organization_id' => 'required',
            'real_locality_id' => 'required',
            'juridical_locality_id' => 'required',
            'real_address' => 'required',
            'juridical_address' => 'required',
            'performer_name' => 'required',
            'type_of_agency' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',

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
            "name_of_company" => $input["name_of_company"],
            "resident_of_RK" => $input["resident_of_RK"],
            "BIN" => $input["BIN"],
            "manager_name" => $input["manager_name"],
            "company_email" => $input["company_email"],
            "password" => $input["password"],
            "code" => $input["code"],
            "country" => $input["country"],
            "type_of_organization_id" => $input["type_of_organization_id"],
            "real_locality_id" => $input["real_locality_id"],
            "juridical_locality_id" => $input["juridical_locality_id"],
            "real_address" => $input["real_address"],
            "juridical_address" => $input["juridical_address"],
            "performer_name" => $input["performer_name"],
            "email" => $input["email"],
            "phone" => $input["phone"],
            "type_of_agency" => $input["type_of_agency"],
            "approved" => 0, //false
        ]);
        UserDocument::create([
            'user_id' => $user->id,
            'path' => $text,
            'title' =>$input['title'],
            'status' => 0
        ]);
//            }else{
//                return response()->json(['image'], 422);
//            }
        $creds = $request->only(['BIN', 'password']);
        $token = auth()->attempt($creds);
        $success['user'] = $user;
        $success['token'] = $token;
        return response()->json(['success' => $success], $this->successStatus);
    }






}
