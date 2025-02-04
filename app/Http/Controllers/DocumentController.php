<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $document = Document::all();
        $users = User::all();
        return view('backend.document.index',compact('document','users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('backend.document.create',compact('users'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_document'=>'required',
            'statut_doc'=>'required',
            'user_id'=>'required',
        ]);
        Document::create($request->all());
        return redirect()->route('document.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $document = Document::findOrFail($id);
        return view('backend.document.index',compact('document'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom_document'=>'required',
            'statut_doc'=>'required',
            'user_id'=>'required',        ]);
        $document = Document::findOrFail($id);
        $document->update($request->all());
        return redirect()->route('document.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $document = Document::findOrFail($id);
        $document->delete();
        return redirect()->route('document.index');
        //
    }
}
