<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
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

        // Handle image upload
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
        return redirect()->route('teams.team')->with('success', 'team updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $formateur = Team::findOrFail($id);
    
        // Validate the request data
        $validatedData = $request->validate([
            'nomComplete' => 'required|string|max:255',
            'specialites' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'linkfacebook' => 'nullable|string|max:255',
            'linktwitter' => 'nullable|string|max:255',
            'linkinstagram' => 'nullable|string|max:255',
            'linklinkedin' => 'nullable|string|max:255',
        ]);
    
        // Update formateur information
        $formateur->update($validatedData);
        return redirect()->route('teams.team')->with('success', 'Formateur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        Team::findOrFail($id)->delete();
        return redirect()->route('teams.team')->with('success', 'Formateur deleted successfully');

    }
}
