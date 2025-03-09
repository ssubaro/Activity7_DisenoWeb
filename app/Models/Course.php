<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_key', 'title', 'description', 'course_cover', 'robotics_kit_id', 'teacher_id'
    ];

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function didacticMaterials()
    {
        return $this->hasMany(DidacticMaterial::class);
    }
}
