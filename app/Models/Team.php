<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomComplete',
        'specialites',
        'link facebook',
        'link twitter',
        'link linkdin',
        'link instgram'
   ];
}
