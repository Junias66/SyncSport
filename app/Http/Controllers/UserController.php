<?php

namespace App\Http\Controllers;

use App\Models\categ_age;
use App\Models\numero;
use App\Models\position;
use App\Models\team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = User::whereNotNull('position_id')->get();
       return view('backend.player.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions = Position::all();
        $numeros = numero::all();
        $categ = categ_age::all();
        $teams = team::all();
        return view('backend.player.create', compact('positions', 'numeros', 'categ', 'teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //dd($request->all());
        $adminClubId = auth()->user()->club->id;
    
    $request->validate([
        'last_name' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username',
        'sex' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'adresse' => 'required|string|max:255',
        'birthday' => 'required|date',
        'height' => 'required|numeric',
        'weight' => 'required|numeric',
        'tel' => 'required|numeric|max:20',
        'nationality' => 'required|string|max:255',
        //'pics' => 'required|image|mimes:jpeg,png,jpg,gif|max:3500',
        'number' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'age_category' => 'required|string|max:255',
        'team' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // Traitement de l'image
    /*if ($request->hasFile('pics')) {
        $image = $request->file('pics');
        $imagePath = $image->store('players', 'public');  // Utilise le disque 'public' et le dossier 'players'
        $data['pics'] = $imagePath;  
    }*/
    $player = User::where('username', $request->input('username'))->first();

    if ($player) {
        return back()->withErrors(['message' => 'Le joueur existe déjà.']);
    } else {    
     User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'adress_users' => $request->adresse,
        'sex' => $request->sex,
        'birthday' => $request->birthday,
       /* 'pics' => $data['pics'],*/
        'phone' => $request->tel,
        'nationality' => $request->nationality,
        'height_players' => $request->height,
        'weight_players' => $request->weight,
        'description' => $request->description,
        'role' => 'joueur',
        'is_active' => true,
        'numero_id' => $request->number,
        'position_id' => $request->position,
        'categage_id' => $request->age_category,
        'club_id' => $adminClubId,
        'team_id' => $request->team
    ]);
    // Redirection avec un message de succès
    return redirect()->route('players.index')->with([
        'message' => 'Le joueur a été ajouté avec succès',
        'alert-type' => 'success',
    ]);
    }
        
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
