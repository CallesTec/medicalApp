<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'diaDate',
        'diaDiagnostic'
    ];


    // public function doctors(){

    //     return $this->belongsTo(Doctor::class);
    // }

    // public function patients(){

    //     return $this->belongsTo(Patient::class);
        
    // }
    

}
