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
use GuzzleHttp\Client;
use Illuminate\Http\Response;

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
            'company_email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|max:32|min:6',
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
            'recaptcha_token' => 'string',
            'document1' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        if (config('recaptcha.enabled') && !$this->checkRecaptcha($request->recaptcha_token, $request->ip())) {
            return response()->json([
                'error' => 'Captcha is invalid.',
            ], Response::HTTP_BAD_REQUEST);
        }
        $file1 = $request->file('document1');
        if ($file1->getClientOriginalExtension() != "pdf") {
            return response()->json(['error'=>'download all documents in pdf format'], 422);
        }
        if ($request->file('document2')) {
            $file2 = $request->file('document2');
            if ($file2->getClientOriginalExtension() != "pdf") {
                return response()->json(['error'=>'download all documents in pdf format'], 422);
            }
        }
        if ($request->file('document3')) {
            $file3 = $request->file('document3');
            if ($file3->getClientOriginalExtension() != "pdf") {
                return response()->json(['error'=>'download all documents in pdf format'], 422);
            }
        }
        if ($request->file('document4')) {
            $file4 = $request->file('document4');
            if ($file4->getClientOriginalExtension() != "pdf") {
                return response()->json(['error'=>'download all documents in pdf format'], 422);
            }
        }
        if ($request->file('document5')) {
            $file5 = $request->file('document5');
            if ($file5->getClientOriginalExtension() != "pdf") {
                return response()->json(['error'=>'download all documents in pdf format'], 422);
            }
        }

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
        //creating first document
        $url = Storage::putFile('public/user_documents', new File($file1));
        $text = url('/') . '/storage/app/public/' . substr($url, 7);
        UserDocument::create([
            'user_id' => $user->id,
            'path' => $text,
            'title' =>$file1->getClientOriginalName(),
            'status' => 0
        ]);
        //creating second document
        if ($request->file('document2')) {
            $url = Storage::putFile('public/user_documents', new File($file2));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
            UserDocument::create([
                'user_id' => $user->id,
                'path' => $text,
                'title' =>$file2->getClientOriginalName(),
                'status' => 0
            ]);
        }
        //creating third document
        if ($request->file('document3')) {
            $url = Storage::putFile('public/user_documents', new File($file3));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
            UserDocument::create([
                'user_id' => $user->id,
                'path' => $text,
                'title' =>$file3->getClientOriginalName(),
                'status' => 0
            ]);
        }
        //creating fourth document
        if ($request->file('document4')) {
            $url = Storage::putFile('public/user_documents', new File($file4));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
            UserDocument::create([
                'user_id' => $user->id,
                'path' => $text,
                'title' =>$file4->getClientOriginalName(),
                'status' => 0
            ]);
        }
        if ($request->file('document5')) {
            $url = Storage::putFile('public/user_documents', new File($file5));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
            UserDocument::create([
                'user_id' => $user->id,
                'path' => $text,
                'title' =>$file5->getClientOriginalName(),
                'status' => 0
            ]);
        }
        $creds = $request->only(['BIN', 'password']);
        $token = auth()->attempt($creds);
        $success['user'] = $user;
        $success['token'] = $token;
        return response()->json(['success' => $success], $this->successStatus);
    }

    protected function checkRecaptcha($token, $ip)
    {
        $response = (new Client)->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret'   => config('recaptcha.secret'),
                'response' => $token,
                'remoteip' => $ip,
            ],
        ]);
        $response = json_decode((string)$response->getBody(), true);
        return $response['success'];
    }




}
