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
        //EC: Get all doctors
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
        //EC: Store a new doctor
        $doctor = new Doctor();
        $doctor->drLastName = $request->drLastName;
        $doctor->drFirstName = $request->drFirstName;
        $doctor->drSpeciality = $request->drSpeciality;
        $doctor->drPhoneNumber = $request->drPhoneNumber;

        $doctor->save();
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
        //EC: Update a doctor
        $doctor = Doctor::findOrFail($id);
        $doctor->drLastName = $request->drLastName;
        $doctor->drFirstName = $request->drFirstName;
        $doctor->drSpeciality = $request->drSpeciality;
        $doctor->drPhoneNumber = $request->drPhoneNumber;

        $doctor->save();
        return $doctor;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //EC: Delete a doctor
        $doctor = Doctor::destroy($id);
        return $doctor;
    }
}
