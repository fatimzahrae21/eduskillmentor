<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursRequest;
use App\Models\Course;

use Illuminate\Http\Request;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $courses = Course::all();
        return view('courses.admin', compact('courses'));
    }
        //
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CoursRequest $request)
    {
        //
       $formFields=$request->validated();
       $formFields['image']=$request->file('image')->store('cours','public');
       
        Course::create($formFields);

        return redirect()->route('courses.index')
            ->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
       
        return view('courses.show', compact('course'));
        return view('NosFormation', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
       
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'dureé' => 'required|string',
            'prix' => 'nullable|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/courses');
            $validatedData['image'] = $imagePath;
        }

        $course->update($validatedData);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }
   /* public function update(Request $request, Course $course)
    {
        //
       /* $formFields = $request->validated();

        
        $course->fill( $formFields)->save();
        $formFields['image']=$request->file('image')->store('cours','public');
       
        return redirect()->route('courses.edit' ,$course->id)
            ->with('success', 'Course updated successfully.');*/
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
       
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully.');
    }
}
