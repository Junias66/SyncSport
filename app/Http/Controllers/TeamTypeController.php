<?php

namespace App\Http\Controllers;

use App\Models\Team_type;
use Illuminate\Http\Request;

class TeamTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamtype = Team_Type::paginate(5);
        return view('backend.team.index-type', compact('teamtype'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create-type');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_team' => 'required',
        ]);

        $team_type = Team_type::create([
            'type_team_name' =>$request->type_team,
        ]);

        return redirect()->route('type_team.index')->with([
            'message' => 'Le type d\'équipe a été ajouté avec succès',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(team_type $team_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teamtype = Team_type::findOrFail($id);
        return view('backend.team.create-type',compact('teamtype'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_team' => 'required',
        ]);
        $team_type = Team_type::findOrFail($id);
        $team_type->update($request->all());

        return redirect()->route('team_type.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teamtype = Team_Type::findOrFail($id);
        $teamtype->delete();

        return redirect()->route('team_Type.index');
        //
    }
}
