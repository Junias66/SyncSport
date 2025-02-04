<?php

namespace App\Http\Controllers;
use App\Models\Type_but;
use App\Models\but;
use App\Models\User;
use Illuminate\Http\Request;

class ButController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $but = but::all();
        $joueurs = User::all();
        $typesBut = Type_but::all();
        return view('backend.but.index', compact('but', 'joueurs', 'typesBut'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $joueurs = User::all();
        $typesBut = Type_but::all();
        return view('backend.but.create', compact( 'joueurs', 'typesBut'));
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
        but::create($request->all());
        return redirect()->route('but.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(but $but)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $but= but ::findOrFail($id);
        return view('backend.but.index',compact('but'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'minute_but'=>'required',
            'stat_individ'=>'required',
            'type_but_marque'=>'required',
        ]);
        $but= but ::findOrFail($id);
        $but->update($request->all());

        return redirect()->route('but.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $but = but::findOrFail($id);
        $but->delete();
        return redirect()->route('but.index');
        //
    }
}
