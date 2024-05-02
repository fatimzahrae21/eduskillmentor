<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coursepartie extends Model
{
    protected $table = '_course__partie'; // Specify the table name
    use HasFactory;
    protected $fillable = [
        'course_id', 'title', 'content', 'video_url'
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
