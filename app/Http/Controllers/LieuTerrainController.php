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
            'nom_terrain' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Vérifie que c'est une image
            'latitude' => 'required',
            'longitude' => 'required',
            'statut' => 'required',
        ]);
    
        $data = $request->except('photo'); // On exclut l’image du tableau des données
    
        // Vérifier si une image a été envoyée
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imagePath = $image->store('photos', 'public');
        
            $data['photo'] = $imagePath;
        }
        
    
        lieu_terrain::create($data); // On utilise $data et non $request->all()
        
        return redirect()->route('terrain.index')->with('success', 'Terrain ajouté avec succès!');
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
    public function edit($id)
    {
        $terrain = lieu_terrain::findOrFail($id);
        return view('backend.terrain.index',compact('terrain'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nom_terrain'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
            'statut'=>'required',
        ]);

        $terrain = lieu_terrain::findOrFail($id);
        $terrain->update($request->all());

        return redirect()->route('terrain.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $terrain = lieu_terrain::findOrFail($id);
        $terrain->delete();
        return redirect()->route('terrain.index');
        //
    }
}
