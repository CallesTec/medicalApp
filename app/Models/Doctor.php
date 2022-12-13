<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'drLastName',
        'drFirstName',
        'drSpeciality',
        'drPhoneNumber'
    ];

    public function appointments(){

        return $this->hasMany(Appointment::class);
    }

    public function clidrhours(){

        return $this->hasMany(CliDrHour::class);
    }
}
