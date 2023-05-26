<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureIntervention extends Model
{
    use HasFactory;

    protected $fillable = ['nature_intervention'];
    
    public function sinistre(){
        return $this->hasMany(Sinistre::class);
    }
    
}
