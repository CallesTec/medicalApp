<?php

namespace App\Http\Controllers;

use App\Models\Diagnostic;
use Illuminate\Http\Request;




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


   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FM: Show a diagnostic
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
        //FM: Update a Diagnostic
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
        //FM: Destroy o delete a diagnostic
        $diagnostic = Diagnostic::destroy($id);
        return $diagnostic;
    }
    
    
    }