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

}
