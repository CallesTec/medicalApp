<?php

namespace App\Http\Controllers;

use App\Models\Diagnostic;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;



class DiagnosticController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostics = Diagnostic::all();
        return $diagnostics;

        // return response()->json([
        //     "results" => $diagnostics
        // ], Response::HTTP_OK);
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


        $diagnostic = new Diagnostic();
        $diagnostic->patient_id = $request->patient_id;
        $diagnostic->doctor_id = $request->doctor_id;
        $diagnostic->diaDate = $request->diaDate;
        $diagnostic->diaDiagnostic = $request->diaDiagnostic;

        if ($diagnostic != null) {
            $diagnostic->save();
            return $diagnostic;
        } 

        // return response()->json([
        //     "message" => "Diagnostic created",
        //     "result" => $diagnostic
        // ], Response::HTTP_OK);

        
        
        // $request->validate([
        //     'patient_id' => 'required|exists:App\Models\Patient,id',
        //     'doctor_id' => 'required|exists:App\Models\Doctor,id',
        //     'diaDate' => 'required|date',
        //     'diaDiagnostic' => 'required|text',
        // ]);
      

        // $diagnostic = Diagnostic::create([
        //     'patient_id' => $request->patient_id,
        //     'doctor_id' => $request->doctor_id,
        //     'diaDate' => $request->diaDate,
        //     'diaDiagnostic' => $request->diaDiagnostic
        // ]);
        

        // $diagnostic->save();

   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnostic = Diagnostic::finOrFail($id);
        return $diagnostic;
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
        
        $diagnostic = Diagnostic::findOrFail($id);
        $diagnostic->patient_id = $request->patient_id;
        $diagnostic->doctor_id = $request->doctor_id;
        $diagnostic->diaDate = $request->diaDate;
        $diagnostic->diaDiagnostic = $request->diaDiagnostic;

        
        if ($diagnostic != null) {
            $diagnostic->save();
            return $diagnostic;
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
        $diagnostic = Diagnostic::destroy($id);
        return $diagnostic;
    }


    //     return response()->json([
    //         "message" => "Diagnostic deleted",
    //         "result" => $diagnostic
    //     ], Response::HTTP_OK);
    
    
    }