<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\DetailFormation;

class DController extends Controller
{
    //
    public function index()
    {
        // 
        $courses = Course::all(); 
        return view ('Formation-details',compact('courses'));
    }
    public function show(string $id)
    {
       
        $detailFormation = DetailFormation::where('course_id', $id)->with('course', 'team')->first();
      
      
        // Return the detail formation view with the data
        return view('Formation-details',compact('detailFormation'));
    }

}
