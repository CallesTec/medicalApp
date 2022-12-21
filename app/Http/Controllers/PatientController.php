<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // EC: Get all Patients
        $patients = Patient::all();

        return response()->json([
            "results" => $patients
        ], Response::HTTP_OK);
        
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

        // EC: Store a new patient

        $request->validate([
            'patLastName' => 'required|string',
            'patFirstName' => 'required|string',
            'patPhoneNumber' => 'required|string',
            'patAddress' => 'required|string',
            'patInsurance' => 'required|boolean',
            'patPersonalID' => 'required|string',
            'patCountry' => 'required|string',
            'patEmail' => 'required|email',
            'patBirthDay' => 'required|date'
        ]);


             $patient = Patient::create([
            "patLastName" => $request->patLastName ,
            "patFirstName" => $request->patFirstName,
            "patPhoneNumber" => $request->patPhoneNumber,
            "patAddress" => $request->patAddress,
            "patInsurance" => $request->patInsurance,
            "patPersonalID" => $request->patPersonalID,
            "patCountry" => $request->patCountry,
            "patEmail" => $request->patEmail,
            "patBirthDay" => $request->patBirthDay
             ]);

        return response()->json([
            "message" => "Patient created",
            "result" => $patient
        ], Response::HTTP_OK); 
    }

      // $patient = new Patient();
        // $patient->patLastName = $request->patLastName;
        // $patient->patFirstName = $request->patFirstName;
        // $patient->patPhoneNumber = $request->patPhoneNumber;
        // $patient->patAddress = $request->patAddress;
        // $patient->patInsurance = $request->patInsurance;
        // $patient->patPersonalID = $request->patPersonalID;
        // $patient->patCountry = $request->patCountry;
        // $patient->patEmail = $request->patEmail;
        // $patient->patBirthDay = $request->patBirthDay;

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FM: Get a patient by id
        $patient = Patient::findOrFail($id);
        return $patient;
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
            'patLastName' => 'required|string',
            'patFirstName' => 'required|string',
            'patPhoneNumber' => 'required|string',
            'patAddress' => 'required|string',
            'patInsurance' => 'required|boolean',
            'patPersonalID' => 'required|string',
            'patCountry' => 'required|string',
            'patEmail' => 'required|email',
            'patBirthDay' => 'required|date'
            ]);

            //Act in DB

                $patient = Patient::findOrFail($id);
                $patient->patLastName = $request->patLastName;
                $patient->patFirstName = $request->patFirstName;
                $patient->patPhoneNumber = $request->patPhoneNumber;
                $patient->patAddress = $request->patAddress;
                $patient->patInsurance = $request->patInsurance;
                $patient->patPersonalID = $request->patPersonalID;
                $patient->patCountry = $request->patCountry;
                $patient->patEmail = $request->patEmail;
                $patient->patBirthDay = $request->patBirthDay;

                $patient->save();

            return response()->json([
                "message" => "Patient updated",
                "result" => $patient
            ], Response::HTTP_OK); 

        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // EC: Delete a patient
        Patient::destroy($id);
        return response()->json([
            "message" => "Patient deleted",
        ], Response::HTTP_OK); 
    }
}
