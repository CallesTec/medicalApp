<?php

namespace App\Http\Controllers;

use App\Models\CliDrHour;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CliDrHourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliDrHour = CliDrHour::all();
        return response()->json([
            "result" => $cliDrHour
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
        $cliDrHour = new CliDrHour();
        $cliDrHour->clinic_id = $request->clinic_id;
        $cliDrHour->doctor_id = $request->doctor_id;
        $cliDrHour->startHour = $request->startHour;
        $cliDrHour->endHour = $request->endHour;

        if ($cliDrHour != null) {
            $cliDrHour->save();
            return response()->json([
                "message" => "An schedule has been appointed"
            ], Response::HTTP_OK);
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
        $cliDrHour = CliDrHour::findOrFail($id);
        return $cliDrHour;
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
        $cliDrHour = CliDrHour::findOrFail($id);
        $cliDrHour->clinic_id = $request->clinic_id;
        $cliDrHour->doctor_id = $request->doctor_id;
        $cliDrHour->startHour = $request->startHour;
        $cliDrHour->endHour = $request->endHour;

        if ($cliDrHour != null){
            $cliDrHour->save();
             return response()->json([
                "message" => "An schedule has been updated"
            ], Response::HTTP_OK);;
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
        $cliDrHour = CliDrHour::destroy($id);
        return response()->json([
            "message" => "An schedule has been deleted",
            "result" => $cliDrHour
        ], Response::HTTP_OK);
    }
}
