<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        // EC: Store a new appointment
        // ... Data validation
        $request->validate([
            "patient_id" => "required",
            "apDate" => "required",
            "apReason" => "required",
            "apMedicalRecord" => "required"
        ]);
        
        // ... Store in the Data Base
        $clinic = Clinic::findOrFail($request->clinic_id);
        $patient = Patient::findOrFail($request->patient_id);
        $doctor = Doctor::findOrFail($request->doctor_id);

        $appointment = $patient->appointments()->create([
            'apDate' => $request->apDate,
            'apReason' => $request->apReason,
            'apMedicalRecord' => $request->apMedicalRecord
        ]);

        // ... Response
        return response()->json([
            "result" => $appointment
        ], Response::HTTP_OK);
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
    }
}
