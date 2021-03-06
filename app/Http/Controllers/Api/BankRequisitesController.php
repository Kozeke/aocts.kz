<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;
use App\BankRequisites;

class BankRequisitesController extends Controller
{
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bank_name' => 'required',
            'BIC' => 'required',
            'IBAN' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $bank_requisites = BankRequisites::firstOrNew(['IBAN' => $request['IBAN'], 'user_id' => $request['user_id']]);
        $bank_requisites->IBAN = $request['IBAN'];
        $bank_requisites->Bank_name = $request['bank_name'];
        $bank_requisites->BIC = $request['BIC'];
        $bank_requisites->user_id = $user->id;
        $bank_requisites->CB = $request['CB'];
        $bank_requisites->save();
        return response()->json(['bank_requisites', $user->bank_requisites], 200);

    }

    public function delete(Request $request)
    {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        BankRequisites::where('id', $request['id'])->delete();

        return response()->json(['success'], 200);

    }
}
