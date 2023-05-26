<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assurance;

class AssuranceController extends Controller
{
    //Ajouter une assurance dans la base de données
    public function ajouter_assurance(Request $request){
        $request->validate([
            'assurance' => 'required|min:3',
        ]);
        $assurance = new Assurance();
        $assurance->assurance = $request->assurance;
        $assurance->save();
        return redirect()->route('assurance')->with('status', 'L\'assurance a bien été ajouté.');
    }
}
