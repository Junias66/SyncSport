<?php

namespace App\Http\Controllers;

use App\Models\categ_age;
use Illuminate\Http\Request;

class CategAgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categ = Categ_age::paginate(5);
        return view('backend.categorie_age.index', compact('categ'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categorie_age.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'age_min' => 'required|integer|min:0',
            'age_max' => 'required|integer|gte:age_min',
        ]);

        $data = [
            'categorie_name' => $request->category_name,
            'intervalle' =>json_encode(['min'=>$request->age_min, 'max'=>$request->age_max]),
        ];

        Categ_age::create(
            $data,
        );

        return redirect()->route('categories.index')->with('success', 'Catégorie d\'âge ajouté avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(categ_age $categ_age)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categ= categ_age ::findOrFail($id);
        return view('backend.categorie_age.index',compact('categ'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'age_min' => 'required|integer|min:0',
            'age_max' => 'required|integer|gte:age_min',
        ]);
        $categ= categ_age ::findOrFail($id);
        $categ->update($request->all());

        return redirect()->route('categories.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categ_age = categ_age::findOrFail($id);
        $categ_age->delete();
        return redirect()->route('categories.index');
        //
    }
}
