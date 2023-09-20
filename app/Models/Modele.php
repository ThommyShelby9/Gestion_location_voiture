<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
   protected $fillable =["modele_name", "annee", "marque_id"];
   protected $table = 'modele';

   public function voiture(){
      return $this->hasMany(Voiture::class);
   }

   public function marque(){
      return $this->belongsTo(Marque::class, 'marque_id', 'id_marque');
   }
}
