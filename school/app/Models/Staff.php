<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    public function classes()
    {
        return $this->belongsToMany(Class_name::class, 'subject_teacher_class', 'staff_id', 'class_id');
    }
    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'subject_teacher_class', 'staff_id', 'subject_id');
    }


}
