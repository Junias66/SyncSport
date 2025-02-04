<?php

namespace App\Http\Controllers;

use App\Models\position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $club = Auth::user()->club_id;
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
    public function edit($id)
    {
        $positions = position::findOrFail($id);
        return view('backend.position.index',compact('positions'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'position_name' => 'required',
        ]);
        $positions = position::findOrFail($id);
        $positions->update($request->all());

        return redirect()->route('positions.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $positions = position::findOrFail($id);
        $positions->delete();
        return redirect()->route('positions.index');
        //
    }
}
