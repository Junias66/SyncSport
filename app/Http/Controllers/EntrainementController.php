<?php

namespace App\Http\Controllers;

use App\Models\entrainement;
use Illuminate\Http\Request;

class EntrainementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrainement = entrainement::all();
        return view('backend.entrainement.index',compact('entrainement'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.entrainement.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_entrainement'=>'required',
            'date_ent'=>'required',
            'heure_ent'=>'required',
            'description'=>'required',
            'statut'=>'required',
            'lieu_id'=>'required',
        ]);
        entrainement::create($request->all());
        return redirect()->route('entrainement.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(entrainement $entrainement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(entrainement $entrainement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, entrainement $entrainement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(entrainement $entrainement)
    {
        //
    }
}
