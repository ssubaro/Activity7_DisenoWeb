<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'course_id', 'title', 'content_text', 'order_position'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}