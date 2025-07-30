<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class_name extends Model
{
    protected $table = 'class_name';
    public function subjects()
{
    return $this->belongsToMany(Subject::class, 'subject_class', 'class_id', 'subject_id');
}

    public function students()
{
    return $this->hasMany(Student::class, 'class_id');
}

    public function staff()
{
    return $this->belongsToMany(Staff::class, 'subject_teacher_class', 'class_id', 'id');
}

}
