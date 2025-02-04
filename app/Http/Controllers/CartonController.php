<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\carton;
use Illuminate\Http\Request;


class CartonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carton = carton::all();
        $joueurs = User::all();
        return view('backend.carton.index',compact('carton','joueurs'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $joueurs = User::all();
        return view('backend.carton.create', compact('joueurs'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_carton'=>'required|in:jaune,rouge',
            'minute'=>'required',
            'motif'=>'required',
            'joueurconc_id'=>'required',
        ]);
        carton::create($request->all());
        return redirect()->route('carton.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(carton $carton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $carton= carton ::findOrFail($id);
        return view('backend.carton.index',compact('carton'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_carton'=>'required|in:jaune,rouge',
            'minute'=>'required',
            'motif'=>'required',
            'joueurconc_id'=>'required',
        ]);
        $carton= carton ::findOrFail($id);
        $carton->update($request->all());

        return redirect()->route('carton.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carton = carton::findOrFail($id);
        $carton->delete();
        return redirect()->route('carton.index');
        //
    }
}
