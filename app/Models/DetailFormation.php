<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DetailFormation extends Model
{
    use HasFactory;
    protected $table = 'detail_formation'; // Specify the table name

    protected $fillable = [
        'course_id',
        'team_id',
        'date_publication',
        'video_link',
        // Add any additional fillable attributes here
    ];
     // Define relationships 
     public function course()
     {
         return $this->belongsTo(Course::class);
     }
 
     public function team()
     {
         return $this->belongsTo(Team::class);
     }
}
