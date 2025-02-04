<?php

namespace App\Http\Controllers;

use App\Models\numero;
use Illuminate\Http\Request;

class NumeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numero = numero::all();
        return view('backend.numero.index',compact('numero'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.numero.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'number'=>'required',
            'number_status'=>'required',
        ]);
        numero::create($request->all());
        return redirect()->route('numero.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(numero $numero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $numero = numero::findOrFail($id);
        return view('backend.numero.index',compact('numero'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'number'=>'required',
            'number_status'=>'required',
        ]);
        $numero = numero::findOrFail($id);
        $numero->update($request->all());

        return redirect()->route('numero.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $numero = numero::findOrFail($id);
        $numero->delete();
        return redirect()->route('numero.index');
        //
    }
}
