<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Http\File;
use App\UserDocument;
use Validator;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;

class UserDocumentController extends Controller
{
    public function deleteDocument(Request $request)
    {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        UserDocument::where('id', $request['id'])->delete();
//        Storage::delete($file);

        return response()->json(['success'], 200);

    }

    public function updateDocument(Request $request){
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }

        $file = $request->file('document');
        if ($file->getClientOriginalExtension() === "pdf") {
            $url = Storage::putFile('public/user_documents', new File($file));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);

        } else {
            return response()->json(['document'], 422);
        }

        $document = UserDocument::find($request['id']);
        $document->path = $text;
        $document->title = $request['title'];
        $document->status = 0;
        $document->save();
        return response()->json(['success', 'document'=>$document], 200);

    }
    public function addDocument(Request $request){
        $validator = Validator::make($request->all(), [
            'document' => 'required',
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }

        $file = $request->file('document');
        if ($file->getClientOriginalExtension() === "pdf") {
            $url = Storage::putFile('public/user_documents', new File($file));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);

        } else {
            return response()->json(['document'], 422);
        }
        $document = UserDocument::create([
            'user_id' => $user->id,
            'path' => $text,
            'title' =>$request['title'],
            'status' => 0
        ]);

        return response()->json(['document'=>$document], 200);

    }

    public function saveContract(Request $request){
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $file = $request->file('document');
        if ($file->getClientOriginalExtension() === "pdf") {
            $url = Storage::putFile('public/user_documents', new File($file));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
            return response()->json(['success'], 200);

        } else {
            return response()->json(['document'], 422);
        }
    }

    public function getDownload(Request $request)
    {
        $input = $request->all();

        //PDF file is stored under project/public/download/info.pdf
        $file= $input['path'];

        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file);

    }
}
