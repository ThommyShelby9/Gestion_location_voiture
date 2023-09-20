<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    protected $fillable = ["name", "categorie_id"];
    protected $table = 'marque';

    public function modele(){
        return $this -> hasMany(Modele::class);
    }

    public function category(){
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id_cat');
    }
}
