<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterPostRequest;
use App\Http\Requests\LoginPostRequest;
use App\Models\User;
use App\Models\Sinistre;
use App\Models\Assurance;
use App\Models\NatureIntervention;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Afficher l'interface de connexion
    public function login(){

        if(Auth::check()){
            return redirect()->route('dashboard');
        }else{
            return view('login');
        }
        
    }

    //Afficher l'interface d'inscription
    public function register(){
       
        if(Auth::check()){
            return redirect()->route('dashboard');
        }else{
            return view('register');
        }
        
    }

    //Traiter le formulaire de connexion
    public function loginPost(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }else{
            return redirect()->back()->with('erreur', 'Connexion incorrect !');
        }
    }

    //Traiter le formulaire d'inscription vers la base de données
    public function registerPost(RegisterPostRequest $request, User $user){
        $user->email = $request->email;
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('register')->with('status', 'Votre compte a bien été créé avec succès.');
    }

    //Afficher le tableau de bord admin
    public function dashboard(){
        $nbUser = User::count();
        $nbSinistre = Sinistre::count();
        $nbAssurance = Assurance::count();
        $nbNatureIntervention = NatureIntervention::count();
        return view('dashboard', compact('nbSinistre', 'nbAssurance', 'nbNatureIntervention', 'nbUser'));
    }

    //Se déconnecter
    public function logout(){
        
        //Session::flush();
        Auth::logout();

        return redirect()->route('login');

    }

}
