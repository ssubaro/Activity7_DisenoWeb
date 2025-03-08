<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name', 'level', 'description'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
