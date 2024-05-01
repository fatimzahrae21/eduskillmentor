<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;
    protected $table = 'contenus'; // Specify the table name

    protected $fillable = [
        'course_id',
        'team_id',
        'title',
        'content',
        'introduction',
        'image'
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
