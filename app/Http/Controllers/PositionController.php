<?php

namespace App\Http\Controllers;

use App\Models\position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::paginate(5);
        return view('backend.position.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'position_name' => 'required',
       ]);

       $position = Position::create([
        'position_name' => $request->position_name,
       ]);

       return redirect()->route('positions.index')->with('success', 'Position ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(position $position)
    {
        //
    }
}
