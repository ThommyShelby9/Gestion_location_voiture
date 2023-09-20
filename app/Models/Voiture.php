<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $fillable = [
        'nom_voiture',
        'boite_vitesse',
        'puissance',
        'nbre_porte',
        'carburant',
        'nbre_cylindre',
        'soupape',
        'vitesse_max',
        'carosserie',
        'transmission',
        'frein',
        'acceleration',
        'couleur',
        'image_principale',
        'image_secondaire',
        'image_tertiaire',
        'modele_id'
    ];

    protected $table = "voiture";

    public function cars_modele(){
        return $this->belongsTo(Modele::class, 'modele_id', 'id_modele');
    } 

  
}
