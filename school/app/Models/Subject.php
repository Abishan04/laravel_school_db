<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';
    public function classes()
    {
        return $this->belongsToMany(Class_name::class, 'class_subject', 'subject_id', 'class_id');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject', 'subject_id', 'student_id');
    }
    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'subject_teacher_class', 'subject_id', 'staff_id');
    }
}
