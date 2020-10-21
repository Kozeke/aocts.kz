<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Http\File;
use App\UserDocument;

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
            return response()->json(['success'], 200);

        } else {
            return response()->json(['document'], 422);
        }
        UserDocument::create([
            'user_id' => $user->id,
            'path' => $text,
            'title' =>$input['title'],
            'status' => 0
        ]);
        $document = UserDocument::find($request['id']);
        $document->path = $text;
        $document->title = $request['title'];
        $document->status = 0;
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
}
