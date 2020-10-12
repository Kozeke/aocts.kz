<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Validator;
use App\Application;

class ApplicationsController extends Controller
{
    public function createApplication(Request $request){
        $input = $request->all();

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
        Application::create([
            'user_id' => $request['user_id'],
            'station' => $request['station'],
            'access_road' => $request['access_road'],
            'dead_end' => $request['dead_end'],
            'wagon_turnover_per_year' => $request['wagon_turnover_per_year'],
            'wagon_turnover_per_month' => $request['wagon_turnover_per_month'],
            'access_road_grant_date' => $request['access_road_grant_date'],
            'status' =>0
        ]);
        return response()->json(['success', 200]);

    }

}
