<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliName',
        'cliAddress',
        'cliPhoneNumber',
    ];

    public function appointments(){

        return $this->hasMany(Appointment::class);
    }

    public function clidrhours(){

        return $this->hasMany(CliDrHour::class);
    }
}
