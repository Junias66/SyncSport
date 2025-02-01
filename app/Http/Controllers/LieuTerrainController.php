<?php

namespace App\Http\Controllers;

use App\Models\lieu_terrain;
use Illuminate\Http\Request;

class LieuTerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $terrain = lieu_terrain::all();
        return view('backend.terrain.index',compact('terrain'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.terrain.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_terrain'=>'required',
            'photo'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'statut'=>'required',

        ]);
        lieu_terrain::create($request->all());
        return redirect()->route('terrain.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(lieu_terrain $lieu_terrain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(lieu_terrain $lieu_terrain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lieu_terrain $lieu_terrain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lieu_terrain $lieu_terrain)
    {
        //
    }
}
