<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    use HasFactory;

    protected $table = "student_registration";

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'age',
        'phone',
        'description',
        'country',
        'city',
        'frameworks',
        'cv'
    ];

}
