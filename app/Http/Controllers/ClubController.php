<?php

namespace App\Http\Controllers;

use App\Models\club;
use App\Models\team;
use App\Models\team_type;
use App\Models\User;
use App\Notifications\AccountActivation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function log()
    {
        return view('front.log-in');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.sign-in');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $request->validate([
            'nom_admin' => ['required', 'string', 'max:255'],
            'prenom_admin' => ['required', 'string', 'max:255'],
            'nom_club' => ['required', 'string', 'max:255', 'unique:clubs,club_name'],
            'adresse' => ['required', 'string', 'max:255'],
            'email_club' => ['required', 'string', 'email', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'username' => ['required', 'string', 'max:255', 'unique:' .User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],
        [
            'nom_club.unique' => 'Ce nom de club existe déjà. Veuillez en choisir un autre.',
            'nom_club.required' => 'Le nom du club est obligatoire.',
        ]);
        $email = strtolower($request->email);

        DB::beginTransaction();
            try {
                $club = Club::create([
                    'club_name' => $request->nom_club,
                    'club_adress' => $request->adresse,
                    'club_country' => $request->pays,
                    'email_club' => $request->email_club,
                ]);
        
                $user = User::create([
                    'first_name' => $request->prenom_admin,
                    'last_name' => $request->nom_admin,
                    'username' => $request->username,
                    'email' => $email,
                    'password' => Hash::make($request->password),
                    'club_id' => $club->id,
                    'activation_token' => Str::random(60),
                ]);
                // Envoi de la notification pour activer le compte
                $user->notify(new AccountActivation($user));

                DB::commit();

                // Retourner une vue ou une réponse JSON
                return view('front.activation-sent'); // Vue à créer pour informer l'utilisateur
            }
            catch (\Exception $e) {
                DB::rollBack();
        
                return response()->json([
                    'message' => 'Une erreur est survenue lors de la création.',
                    'error' => $e->getMessage(),
                ], 500);
            }
    }

    public function activate($token){
        $user = User::where('activation_token', $token)->first();

        if ($user) {
            $user->update([
                'activation_token' => null, // Supprime le token d'activation
                'is_active' => true, // Le compte est maintenant activé
            ]);

            return redirect('/se connecter')->with('message', 'Votre compte a été activé avec succès.');
        } else {
            return redirect('/se connecter')->with('error', 'Le lien d\'activation est invalide.');
        }
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        //Vérification des informations

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/dashboard');
        }else{
            return back()->withErrors([
                'erreur' => 'Veuillez vérifier les informations',
            ])->withInput();
        }

    }
  
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $teams = team::all();
        $typeteams = team_type::all();
        return view('backend.index', compact('teams', 'typeteams'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $club= club ::findOrFail($id);
        return view('backend.team.create-type',compact('club'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $club=club::findOrFail($id);
        $club->update($request->all());

        return redirect()->route('entrainement.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy( $id)
    {
         $club = club::findOrFail($id);
        $club->delete();
        //
    }*/
}
