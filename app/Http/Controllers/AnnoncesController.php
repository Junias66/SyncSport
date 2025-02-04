<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Annonces;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $annonces = Annonces::all();
        $users = User::all(); // Récupère tous les utilisateurs
        return view('backend.annonces.index', compact('annonces', 'users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('backend.annonces.create', compact( 'users'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_annonce'=>'required',
            'titre'=>'required',
            'message'=>'required',
            'statut_annonce'=>'required',
            'user_id'=>'required',
        ]);
        Annonces::create($request->all());
        return redirect()->route('annonces.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Annonces $annonces)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $annonces= Annonces ::findOrFail($id);
        return view('backend.annonces.index',compact('annonces'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_annonce'=>'required',
            'titre'=>'required',
            'message'=>'required',
            'statut_annonce'=>'required',
            'user_id'=>'required',
        ]);
        $annonces= Annonces ::findOrFail($id);
        $annonces->update($request->all());

        return redirect()->route('annonces.index');
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $annonces = Annonces::findOrFail($id);
        $annonces->delete();
        return redirect()->route('annonces.index');
        //
    }
}
