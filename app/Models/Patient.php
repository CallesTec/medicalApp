<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'patLastName',
        'patFirstName',
        'patPhoneNumber',
        'patAddress',
        'patInsurance',
        'patPersonalID', 
        'patCountry',
        'patEmail',
        'patBirthDay'
    ];

    public function appointments(){

        return $this->hasMany(Appointment::class);
    }
}
