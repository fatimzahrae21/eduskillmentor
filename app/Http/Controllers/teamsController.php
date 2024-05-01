<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;

class teamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
     
        return view("teams.team", compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        // $formFields=$request->validated();
        // $formFields['image']=$request->file('image')->store('cours','public');
        
        //  Team::create($formFields);
 
        //  return redirect()->route('teams.team')
        //      ->with('success', 'Course created successfully.');
    
        
       //
         // Validate the incoming request data
         $validatedData = $request->validate([
            'nomComplete' => 'required|string|max:255',
            'specialites' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'linkfacebook' => 'nullable|string|max:255',
            'linktwitter' => 'nullable|string|max:255',
            'linkinstagram' => 'nullable|string|max:255',
            'linklinkedin' => 'nullable|string|max:255',
        ]);

    //     // Handle image upload
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Create a new Formateur instance
        $formateur = new Team();
        $formateur->nomComplete = $validatedData['nomComplete'];
        $formateur->specialites = $validatedData['specialites'];
        $formateur->image = $imageName;
        $formateur->linkfacebook = $validatedData['linkfacebook'];
        $formateur->linktwitter = $validatedData['linktwitter'];
        $formateur->linkinstagram = $validatedData['linkinstagram'];
        $formateur->linklinkedin = $validatedData['linklinkedin'];

        // Save the Formateur to the database
        $formateur->save();

        // Redirect back to the index page with a success message
        return redirect()->route('teams.team')->with('success', 'team added successfully');
    
 }
    

    /**
     * Display the specified resource.
     */
    public function show(TeamRequest $request)
    {
        //
       
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $teams)
    {
        //
        return view('teams.edit', compact('teams'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $team = Team::findOrFail($id);

        $validatedData = $request->validate([
            'nom' => 'required',
            'specialites' => 'required',
            'link facebook' => 'required',
            'link twitter' => 'required',
            
            'link linkdin' => 'required',
            'link instgram' => 'required',
        ]);
        $team->update($validatedData);

        return redirect()->route('teams.team')->with('success', 'team updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.team')
            ->with('success', 'team deleted successfully.');
        //
    }
}
