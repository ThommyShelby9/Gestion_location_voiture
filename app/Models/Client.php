<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nom', 'prenom','tel', 'adresse', 'photo', 'cni', 'email'];
    protected $table = "client";

    public function location(){
        return $this-> hasMany(Location::class, 'id_voiture', 'id_client');
    }
}
