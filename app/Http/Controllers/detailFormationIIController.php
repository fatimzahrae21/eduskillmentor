<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\DetailFormation;

class detailFormationIIController extends Controller
{
    // public function create()
    // {
    //     $courses = Course::all();
    //     $teams = Team::all();
    //     return view('courses.create', compact('courses', 'teams'));
    // }

    public function store(Request $request)
    {
        // $request->validate([
        //     'course_id' => 'required|exists:courses,id',
        //     'team_id' => 'required|exists:teams,id',
        //     'date_publication' => 'required|date',
        //     'video_link' => 'nullable|url',
        // ]);

        DetailFormation::create([
            'course_id' => $request->course_id,
            'team_id' => $request->team_id,
            'date_publication' => $request->date_publication,
            'video_link' => $request->video_link,
        ]);

        return redirect()->route('courses.create')->with('success', 'Detail formation added successfully.');
    }

}
