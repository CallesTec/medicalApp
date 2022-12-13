<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //EC: Get all clinics
        $clinics = Clinic::all();
        return $clinics;
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
        //EC: Store a new clinic
        $clinic = new Clinic();
        $clinic->cliName = $request->cliName;
        $clinic->cliAddress = $request->cliAddress;
        $clinic->cliPhoneNumber = $request->cliPhoneNumber;

        $clinic->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FM: Get a clinic by id
        $clinic = Clinic::findOrFail($id);
        return $clinic;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //EC: Update a clinic
        $clinic = Clinic::findOrFail($id);
        $clinic->cliName = $request->cliName;
        $clinic->cliAddress = $request->cliAddress;
        $clinic->cliPhoneNumber = $request->cliPhoneNumber;

        $clinic->save();
        return $clinic;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //EC: Delete a clinic by id
        $clinic = Clinic::destroy($id);
        return $clinic;
    }
}
