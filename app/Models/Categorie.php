<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ["name"];
    protected $table = "categorie";

    public function marque(){
        return $this -> hasMany(Marque::class);
    }
}
