<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NatureIntervention;

class InterventionController extends Controller
{
    //Ajouter une assurance dans la base de données
    public function ajouter_intervention(Request $request){
        $request->validate([
            'nature_intervention' => 'required|min:3',
        ]);
        $intervention = new NatureIntervention();
        $intervention->nature_intervention = $request->nature_intervention;
        $intervention->save();
        return redirect()->route('intervention')->with('status', 'La nature d\'intervention a bien été ajouté.');
    }
}
