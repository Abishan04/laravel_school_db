<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';
    public function classes()
    {
        return $this->belongsToMany(Class_name::class, 'subject_class', 'subject_id', 'class_id');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'subject_teacher_class', 'subject_id', 'staff_id');
    }
}
