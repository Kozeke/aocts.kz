<?php

namespace App\Http\Controllers;

use App\TypeOfOrganization;
use Illuminate\Http\Request;

class TypeOfOrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        return TypeOfOrganization::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\TypeOfOrganization  $typeOfOrganization
     * @return \Illuminate\Http\Response
     */
    public function show(TypeOfOrganization $typeOfOrganization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeOfOrganization  $typeOfOrganization
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeOfOrganization $typeOfOrganization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeOfOrganization  $typeOfOrganization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeOfOrganization $typeOfOrganization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeOfOrganization  $typeOfOrganization
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeOfOrganization $typeOfOrganization)
    {
        //
    }
}
