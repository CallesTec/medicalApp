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
        $request->validate([
            'cliName' => 'required|string',
            'cliAddress' => 'required|string',
            'cliPhoneNumber' => 'required|string'
        ]);


             $clinic = Clinic::create([
            "cliName" => $request->cliName ,
            "cliAddress" => $request->cliAddress,
            "cliPhoneNumber" => $request->cliPhoneNumber
        ]);

        $clinic->save();

        return $clinic;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $request->validate([
            'cliName' => 'required|string',
            'cliAddress' => 'required|string',
            'cliPhoneNumber' => 'required|string'
        ]);

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
       $clinic = Clinic::destroy($id);
        return $clinic;

    }
}
