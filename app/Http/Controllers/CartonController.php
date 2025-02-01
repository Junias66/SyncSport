<?php

namespace App\Http\Controllers;

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
        return view('backend.carton.index',compact('carton'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.carton.create');
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
    public function edit(carton $carton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, carton $carton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carton $carton)
    {
        //
    }
}
