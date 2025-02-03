<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competition = Competition::all();
        return view('backend.competition.index',compact('competition'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.competition.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'competition_name'=>'required',
            'description'=>'required',
            'statut_compet'=>'required',
        ]);
        Competition::create($request->all());
        return redirect()->route('competition.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Competition $competition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $competition = Competition::findOrFail($id);
        return view('backend.competition.index',compact('competition'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'competition_name'=>'required',
            'description'=>'required',
            'statut_compet'=>'required',
        ]);
        $competition=Competition::findOrFail($id);
        $competition->update($request->all());

        return redirect()->route('competition.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $competition = Competition::findOrFail($id);
        $competition->delete();
        return redirect()->route('competition.index');
        //
    }
}
