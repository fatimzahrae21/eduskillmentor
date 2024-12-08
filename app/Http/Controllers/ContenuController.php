<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Course;
use App\Models\Contenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\coursepartie;

class ContenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teams = Team::all();
        $contenus = Contenu::all();
        return view('contenu.admin', compact('contenus','teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $courses = Course::all();
        $teams = Team::all();
        return view('contenu.create', compact('courses', 'teams'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // ajouter man la table _course__partie 
       // model dyal had la table coursepartie

        // Validate the incoming data
        $validatedData = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required',
            'content' => 'required',
            'videourl' => 'required|mimes:mp4,avi,mov,wmv,ogv,ogg,webm,ogx',
        ]);
    
        // Check if a file is uploaded
        if ($request->hasFile('videourl')) {
            $file = $request->file('videourl');
            
            // Check if the file is valid
            if ($file->isValid()) {
                // Move the uploaded file to the desired location
                $file_name = $file->getClientOriginalName();
                $file->move('upload', $file_name);
    
                // Create a new CoursePartie instance
                $coursePartie = new CoursePartie();
                $coursePartie->course_id = $validatedData['course_id'];
                $coursePartie->title = $validatedData['title'];
                $coursePartie->content = $validatedData['content'];
                $coursePartie->video_url = $file_name;
                $coursePartie->save();
    
                return redirect()->route('contenu.create')->with('success', 'Content formation added successfully.');
            } else {
                // Handle invalid file
                return back()->with('error', 'Invalid file uploaded.');
            }
        } else {
            // Handle case where no file is uploaded
            return back()->with('error', 'No file uploaded.');
        } }
    

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $content = coursepartie::where('course_id', $id)->with('course')->get();
      
      
        // Return the detail formation view with the data
        return view('contenu',compact('content'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contenu $contenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contenu $contenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contenu $contenu)
    {
        //
    }
}
