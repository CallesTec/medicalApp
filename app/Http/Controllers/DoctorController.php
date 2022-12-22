<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //FM: Show every doctor
        $doctors = Doctor::all();
        return $doctors;
        
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
            'drLastName' => 'required|string',
            'drFirstName' => 'required|string',
            'drSpeciality' => 'required|string',
            'drPhoneNumber' => 'required|string',
        ]);


             $doctor = Doctor::create([
            "drLastName" => $request->drLastName ,
            "drFirstName" => $request->drFirstName,
            "drSpeciality" => $request->drSpeciality,
            "drPhoneNumber" => $request->drPhoneNumber,
        ]);

        if ($doctor != null) {
            $doctor->save();
            return $doctor;
        } 


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FM: Show a single doctor
        $doctor = Doctor::findOrFail($id);
        return $doctor;
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

        //FM: Update every field of doctor
        $request->validate([
            'drLastName' => 'required|string',
            'drFirstName' => 'required|string',
            'drSpeciality' => 'required|string',
            'drPhoneNumber' => 'required|string',
        ]);

        $doctor = Doctor::findOrFail($id);
        $doctor->drLastName = $request->drLastName;
        $doctor->drFirstName = $request->drFirstName;
        $doctor->drSpeciality = $request->drSpeciality;
        $doctor->drPhoneNumber = $request->drPhoneNumber;
        

        if ($doctor != null) {
            $doctor->save();
            return $doctor;
        } 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //FM: Delete a doctor
         $doctor = Doctor::destroy($id);
         return $doctor;

    }
}
