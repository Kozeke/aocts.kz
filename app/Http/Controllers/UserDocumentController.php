<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use Storage;

class UserDocumentController extends Controller
{
    public function uploadDocument(Request $request)
    {
        $file = $request->file('document');
        if ($file->getClientOriginalExtension() === "JPG" || $file->getClientOriginalExtension() === "png" || $file->getClientOriginalExtension() === "jpg" || $file->getClientOriginalExtension() === "jpeg") {
            $url = Storage::putFile('public/user_documents', new File($file));
            $text = url('/') . '/storage/app/public/' . substr($url, 7);
            return $text;
        } else {
            return response()->json(['document'], 422);

        }
    }
}
