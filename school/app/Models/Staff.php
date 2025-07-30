<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    public function classes()
    {
        return $this->hasMany(Class_name::class, 'id', 'id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_teacher_class', 'staff_id', 'subject_id');
    }
    public function students()
    {
        return $this->hasManyThrough(Student::class, Class_name::class, 'staff_id', 'class_id', 'id', 'id');
    }

}
