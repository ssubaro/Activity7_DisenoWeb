<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DidacticMaterial extends Model
{
    protected $fillable = [
        'course_id', 'title', 'file_path', 'type'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}