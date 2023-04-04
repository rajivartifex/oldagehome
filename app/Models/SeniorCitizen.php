<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniorCitizen extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'name',
        'dob',
        'contact_no',
        'communication_address',
        'profile_pic',
        'emergency_address',
        'added_by',
        'registation_date'
    ];
}
