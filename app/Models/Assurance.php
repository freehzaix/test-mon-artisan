<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    use HasFactory;

    protected $fillable = ['assurance'];
    
    public function sinistre(){
        return $this->hasMany(Sinistre::class);
    }

}
