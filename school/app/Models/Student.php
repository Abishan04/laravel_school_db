<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    // Define any relationships or methods specific to the Student model here
    public function class()
    {
        return $this->belongsTo(Class_name::class, 'class_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject', 'student_id', 'subject_id');
    }
    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'staff_student', 'student_id', 'staff_id');
    }
    // Add any additional methods or properties as needed
}
