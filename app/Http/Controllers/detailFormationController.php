<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\DetailFormation;

use Illuminate\Http\Request;

class detailFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
        $courses = Course::all(); 
        return view ('Formation-details',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function learn_more() {
        return view('learn_more');
    }
    public function singin() {
        return view('singin');
    }
    public function singup() {
        return view('singup');
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $detailFormation = DetailFormation::where('course_id', $id)->with('course', 'team')->first();
      
      
        // Return the detail formation view with the data
        return view('Formation-details',compact('detailFormation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
