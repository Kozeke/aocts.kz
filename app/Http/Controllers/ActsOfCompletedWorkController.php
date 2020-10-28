<?php

namespace App\Http\Controllers;

use App\ActsOfCompletedWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Carbon\Carbon;

class ActsOfCompletedWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'application_id' => 'required',
            'act_start_date' => 'required',
            'act_end_date' => 'required',
            'number_of_ABP' => 'required',
            'payment' => 'required',
            'status' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        ActsOfCompletedWork::create([
            'application_id' => $request['application_id'],
            'act_start_date' => $request['act_start_date'],
            'act_end_date' => $request['act_end_date'],
            'number_of_ABP' => $request['number_of_ABP'],
            'payment' => $request['payment'],
            'status' => $request['status'],
        ]);
        return response()->json(['success'], 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActsOfCompletedWork  $actsOfCompletedWork
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'start_date' => 'required|date|before_or_equal:start_date',
//            'end_date' => 'required|date',
//        ]);
//        if ($validator->fails()) {
//            return response()->json(['error' => $validator->errors()], 422);
//        }

        $acts = ActsOfCompletedWork::filter($request->all())->get();

        return $acts;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActsOfCompletedWork  $actsOfCompletedWork
     * @return \Illuminate\Http\Response
     */
    public function edit(ActsOfCompletedWork $actsOfCompletedWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActsOfCompletedWork  $actsOfCompletedWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActsOfCompletedWork $actsOfCompletedWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActsOfCompletedWork  $actsOfCompletedWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActsOfCompletedWork $actsOfCompletedWork)
    {
        //
    }
}
