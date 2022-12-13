<?php

namespace App\Http\Controllers;

use App\Models\CliDrHour;
use Illuminate\Http\Request;

class CliDrHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //EC: Get all schedules
        $cdhours = CliDrHour::all();
        return $cdhours;
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
        //EC:  Store a new shedule
        $cdhour = new CliDrHour();
        $cdhour->clinic_id = $request->clinic_id;
        $cdhour->doctor_id = $request->doctor_id;
        $cdhour->startHour = $request->startHour;
        $cdhour->endHour = $request->endHour;

        $cdhour->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //FM: Get a schedule by id
        $cdhour = CliDrHour::findOrFail($id);
        return $cdhour;
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
        //EC:  Store a new shedule
        $cdhour = CliDrHour::findOrFail($id);
        $cdhour->clinic_id = $request->clinic_id;
        $cdhour->doctor_id = $request->doctor_id;
        $cdhour->startHour = $request->startHour;
        $cdhour->endHour = $request->endHour;

        $cdhour->save();
        return $cdhour;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //EC: Delete a schedule by id
        $cdhour = CliDrHour::destroy($id);
        return $cdhour;
    }
}
