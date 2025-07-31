<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';

    public function class()
    {
        return $this->belongsTo(Class_name::class, 'class_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }
    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'staff_student', 'student_id', 'staff_id');
    }

}
