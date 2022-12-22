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

   
}
