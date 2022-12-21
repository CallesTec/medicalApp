<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CliDrHour extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'doctor_id',
        'startHour',
        'endHour'
    ];

    // public function clinics(){

    //     return $this->belongsTo(Clinic::class);
    // }

    // public function doctors(){

    //     return $this->belongsTo(Doctor::class);
    // }
}
