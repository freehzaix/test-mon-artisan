<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sinistre;

class SinistreController extends Controller
{
    //Traitement du formulaire de déclaration de sinistre
    public function sinistre(Request $request){
        $request->validate([
            'assurance_id' => 'required',
            'numero_police' => 'required',
            'nom_prenom' => 'required',
            'contact1' => 'required',
            'contact2' => '',
            'lieu' => 'required',
            'nature_intervention_id' => 'required',
            'date_sinistre' => 'date',
            'details' => 'required',
        ]);
        
        $sinistre = new Sinistre();
        $sinistre->assurance_id = $request->assurance_id;
        $sinistre->numero_police = $request->numero_police;
        $sinistre->nom_prenom = $request->nom_prenom;
        $sinistre->contact1 = $request->contact1;
        $sinistre->contact2 = $request->contact2;
        $sinistre->lieu = $request->lieu;
        $sinistre->nature_intervention_id = $request->nature_intervention_id;
        $sinistre->date_sinistre = $request->date_sinistre;
        $sinistre->details = $request->details;
        $sinistre->save();

        return redirect()->route('index')->with('status', 'Votre déclaration a bien été ajouté.');
    }
}
