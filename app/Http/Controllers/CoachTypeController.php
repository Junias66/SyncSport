<?php

namespace App\Http\Controllers;

use App\Models\coach_type;
use Illuminate\Http\Request;

class CoachTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coach = coach_type::all();
        return view('backend.coach.index',compact('coach'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.coach.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type_coach_name'=>'required',
        ]);
        coach_type::create($request->all());
        return redirect()->route('coach.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(coach_type $coach_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $coach_type = coach_type ::findOrFail($id);
        return view('backend.coach.index',compact(' coach_type'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type_coach_name'=>'required',
        ]);
        $coach = coach_type::findOrFail($id);
        $coach->update($request->all());

        return redirect()->route('coach.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $coach = coach_type::findOrFail($id);
        $coach->delete();
        return redirect()->route('coach.index');
        //
    }
}
