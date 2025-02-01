<?php

namespace App\Http\Controllers;

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
        return view('backend.annonces.index',compact('annonces'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.annonces.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'minute_but'=>'required',
            'stat_individ'=>'required',
            'type_but_marque'=>'required',
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
    public function edit(Annonces $annonces)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonces $annonces)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonces $annonces)
    {
        //
    }
}
