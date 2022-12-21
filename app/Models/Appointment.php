<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'patient_id',
        'doctor_id',
        'apDate',
        'apReason',
    ];

    // public function clinics(){
        
    //     return $this->belongsTo(Clinic::class);
    // }

    // public function patients(){
        
    //     return $this->belongsTo(Patient::class);
    // }

    // public function doctors(){
        
    //     return $this->belongsTo(Doctor::class);
    // }

}
