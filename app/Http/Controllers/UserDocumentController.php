<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Storage;
use App\UserDocument;

class UserDocumentController extends Controller
{
    public function deleteDocument(Request $request)
    {
        UserDocument::where('id', $request['id'])->delete();
        return response()->json(['success'], 200);

    }

    public function saveContract(Request $request){
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
