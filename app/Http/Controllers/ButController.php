<?php

namespace App\Http\Controllers;

use App\Models\but;
use Illuminate\Http\Request;

class ButController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $but = but::all();
        return view('backend.but.index',compact('but'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.but.create');
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
    public function edit(but $but)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, but $but)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(but $but)
    {
        //
    }
}
