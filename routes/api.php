<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CliDrHourController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\DiagnosticController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// EC: Route for pattients
Route::resource('patients', PatientController::class)
        ->only(['index', 'show', 'store', 'update', 'destroy']);

// EC: Route for clinics
Route::resource('clinics', ClinicController::class)
        ->only(['index', 'show', 'store', 'update', 'destroy']);    
        
// EC: Route for doctors
Route::resource('doctors', DoctorController::class)
        ->only(['index', 'show', 'store', 'update', 'destroy']);     
        
// EC: Route for cinics and doctors hours
Route::resource('cli_dr_hours', CliDrHourController::class)
        ->only(['index', 'show', 'store', 'update', 'destroy']);

// EC: Route for appointments
Route::resource('appointments', AppointmentController::class)
        ->only(['index', 'show', 'store', 'update', 'destroy']);

//FM: Route for diagnostics
Route::resource('diagnostics', DiagnosticController::class)
        ->only(['index', 'show', 'store', 'update', 'destroy']);