<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\team_type;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $teams = Team::paginate(10);
        $typeteams = Team_type::all();
        return view('backend.team.team_index', compact('teams', 'typeteams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = team_type::all();
        return view('backend.team.team_create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'team_pics' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'existing_team_id' => 'required',
        ]);

        $data = [
            'team_name' => $request->team_name,
            'type_id' => $request->existing_team_id,
        ];
        
        if($request->hasFile('team_pics')){
            $photo = $request->file('team_pics');
            $photopath = $photo->store('team_pics', 'public');
            $data['team_pics'] = $photopath;
        }
       

        Team::create($data);
        return redirect()->route('teams.index')->with('success', 'Équipe créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(team $team)
    {
        //
    }
}
