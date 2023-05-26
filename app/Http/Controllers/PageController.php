<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assurance;
use App\Models\NatureIntervention;
use App\Models\Sinistre;

class PageController extends Controller
{
    //Afficher la vue index
    public function index(){
        $assurances = Assurance::all();
        $natureInterventions = NatureIntervention::all();
        
        return view('index', compact('assurances', 'natureInterventions'));
    }

    //Afficher la vue assurance
    public function assurance(){
        $assurances = Assurance::all();
        return view('pages.assurance', compact('assurances'));
    }

    //Afficher la vue intervention
    public function intervention(){
        $natureInterventions = NatureIntervention::all();
        return view('pages.intervention', compact('natureInterventions'));
    }

    //Afficher la vue sinistre
    public function sinistre(){
        $sinistres = Sinistre::all();
        return view('pages.sinistre', compact('sinistres'));
    }

}
