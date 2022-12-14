<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
// use App\Models\Clinic;
// use App\Models\Doctor;
// use App\Models\Patient;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // EC: Get all appintments
        $appointments = Appointment::all();
        return $appointments;
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
        $appointment = new Appointment();
        $appointment->clinic_id = $request->clinic_id;
        $appointment->patient_id = $request->patient_id;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->apDate = $request->apDate;
        $appointment->apReason = $request->apReason;

        $appointment->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FM: Get a patient by id
        $appointment = Appointment::findOrFail($id);
        return $appointment;
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
        //
        $appointment = Appointment::findOrFail($id);
        $appointment->clinic_id = $request->clinic_id;
        $appointment->patient_id = $request->patient_id;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->apDate = $request->apDate;
        $appointment->apReason = $request->apReason;

        $appointment->save();
        return $appointment;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $appointments = Appointment::destroy($id);
        return $appointments;
    }
}
