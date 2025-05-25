<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voituer extends Model
{
//     public function images() {
//     return $this->hasMany(Voituerimage::class, 'voituer_id');
// }
use HasFactory;

 protected $fillable = [
         
 'marque',
 'image',
'modele',
'version',
'annee',
'carburant',
'transmission',
'kilometrage',
'moteur',
'prix',
'neuve',
'localisation',
'description'
    ];
}
