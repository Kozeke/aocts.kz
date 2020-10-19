<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Application;

class ApplicationController extends Controller
{
    public function self()
    {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        return $user->applications;
    }

    public function createApplication(Request $request){

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'station' => 'required',
            'access_road' => 'required',
            'dead_end' => 'required',
            'wagon_turnover_per_year' => 'required',
            'wagon_turnover_per_month' => 'required',
            'access_road_grant_date' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return response()->json(['error'=> $e->getMessage()]);
        }
        Application::create([
            'user_id' => $request['user_id'],
            'station' => $request['station'],
            'access_road' => $request['access_road'],
            'dead_end' => $request['dead_end'],
            'wagon_turnover_per_year' => $request['wagon_turnover_per_year'],
            'wagon_turnover_per_month' => $request['wagon_turnover_per_month'],
            'access_road_grant_date' => $request['access_road_grant_date'],
            'performer' => $request['performer'],
            'status' =>0
        ]);
        return response()->json(['success', 200]);

    }

}
