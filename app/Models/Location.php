<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ["id_client", "id_voiture", "date_sortie_voiture", "date_prevue_retour", "date_retour_effectif", "observation"];
    protected $table = "location";

    public function get_cars(){
        return $this->belongsTo(Voiture::class, 'id_voiture', 'id_voiture');
    }

    public function get_client(){
        return $this->belongsTo(Client::class, 'id_client', 'id_client');
    }
}
