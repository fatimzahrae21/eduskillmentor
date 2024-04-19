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
        
        dd($request->all());
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
