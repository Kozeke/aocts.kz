<?php

namespace App\Http\Controllers\Api;

use App\Application;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Agreement;
use Validator;

class AgreementController extends Controller
{
    public function create(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'application_id' => 'required',
            'business_index' => 'required',
            'address' => 'required',
            'access_road' => 'required',
            'amount_of_carriage_on_loading' => 'required',
            'amount_of_carriage_on_unloading' => 'required',
            'size_of_the_simultaneous_supply_of_wagons' => 'required',
            'carriage_address' => 'required',
            'agreement_start_date' => 'required',
            'agreement_end_date' => 'required',
            'performer' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        $agreement = Agreement::create([
            'application_id' => $request['application_id'],
            'business_index' => $request['business_index'],
            'address' => $request['address'],
            'access_road' => $request['access_road'],
            'amount_of_carriage_on_loading' => $request['amount_of_carriage_on_loading'],
            'amount_of_carriage_on_unloading' => $request['amount_of_carriage_on_unloading'],
            'size_of_the_simultaneous_supply_of_wagons' => $request['size_of_the_simultaneous_supply_of_wagons'],
            'carriage_address' => $request['carriage_address'],
            'agreement_start_date' => $request['agreement_start_date'],
            'agreement_end_date' => $request['agreement_end_date'],
            'performer' => $request['performer'],
            'company_name' => $request['company_name'],
        ]);
        return response()->json(['agreements', $agreement], 200);
    }
}
