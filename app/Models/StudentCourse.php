<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;

    protected $table = "student_course";

    protected $fillable = [
        'name'
    ];

    public function course(){
        return $this->belongsTo(Student::class,'course_id','id');
    }
}
