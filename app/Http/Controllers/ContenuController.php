<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Course;
use App\Models\Contenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $validatedData = $request->validate([
            'course_id' => 'required',
            'team_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'nullable|string|max:255',
            'content' => 'required|string',
            'introduction' => 'required|string',
         
        ]);

        // Handle image upload
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Create a new Formateur instance
        $contenus = new Team();
        $contenus->course_id = $validatedData['course_id'];
        $contenus->team_id = $validatedData['team_id'];
        $contenus->image = $imageName;
        $contenus->title = $validatedData['title'];
        $contenus->content = $validatedData['content'];
        $contenus->introduction = $validatedData['introduction'];
       
        // Save the Formateur to the database
        $contenus->save();
        //
        // Contenu::create([
        //     'course_id' => $request->course_id,
        //     'team_id' => $request->team_id,
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'introduction'=> $request->introduction,
        // 'image'=> $request->image
        // ]);

        return redirect()->route('contenu.create')->with('success', 'content formation added successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $content = Contenu::where('course_id', $id)->with('course', 'team')->first();
      
      
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
