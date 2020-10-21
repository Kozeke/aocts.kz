<?php

namespace App\Http\Controllers\Api;

use App\Application;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\PaymentHistory;

class PaymentHistoryController extends Controller
{
    public function make(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "payment" => 'required',
            "application_id" => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }

        PaymentHistory::create([
            'payment' => $request['payment'],
            'status' => $request['status'],
            'application_id' => $request['application_id']
        ]);

        return response()->json(['success'], 200);

    }

    public function transferMoney(Request $request){
        $transfer_from_balance = Application::where('id', $request['transfer_from'])->pluck('payment_balance');
        if ($transfer_from_balance[0] >= $request['amount']){
            $transfer_from_application = Application::find($request['transfer_from']);
            $transfer_from_application -> payment_balance -= $request['amount'];
            $transfer_from_application -> save();

            $transfer_to_application = Application::find($request['transfer_to']);
            $transfer_to_application -> payment_balance += $request['amount'];
            $transfer_to_application -> save();
            return response()->json(['success'], 200);
        }else{
            return response()->json(['error'=>'not enough money'], 422);
        }
    }
}
