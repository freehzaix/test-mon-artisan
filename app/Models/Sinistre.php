<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinistre extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_police',
        'nom_prenom',
        'contact1',
        'contact2',
        'lieu',
        'date_sinistre',
        'details',
        'assurance_id',
        'nature_intervention_id',
    ];

    public function assurance(){
        return $this->belongsTo(Assurance::class);
    }

    public function natureIntervention(){
        return $this->belongsTo(NatureIntervention::class);
    }

}
