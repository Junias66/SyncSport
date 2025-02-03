<?php

namespace App\Http\Controllers;

use App\Models\matche;
use Illuminate\Http\Request;

class MatcheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matche = matche::all();
        return view('backend.matche.index',compact('matche'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.matche.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'match_date'=>'required',
            'match_time'=>'required',
            'terrain'=>'required',
            'arbitre_name'=>'required',
            'team_name'=>'required',
            'team_adverse'=>'required',
            'match_status'=>'required',
            'match_pics'=>'required',
        ]);
        matche::create($request->all());
        return redirect()->route('matche.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(matche $matche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $matche = matche::findOrFail($id);
        return view('backend.matche.index',compact('matche'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'match_date'=>'required',
            'match_time'=>'required',
            'terrain'=>'required',
            'arbitre_name'=>'required',
            'team_name'=>'required',
            'team_adverse'=>'required',
            'match_status'=>'required',
            'match_pics'=>'required',
        ]);
        $matche = matche::findOrFail($id);
        $matche->update($request->all());

        return redirect()->route('matche.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $matche = matche::findOrFail($id);
        $matche->delete();
        return redirect()->route('matche.index');
        //
    }
}
