<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use App\Models\Modele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ModeleController extends Controller
{
    //

    public function model() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $data_marque = Marque::all();
        return view('carManagement.model', compact('nom', 'prenom', 'data_marque'));
    }

    public function send_model(Request $request){
        $data = $request->all();
        $request->validate([
            "modele_name" => 'required',
            "annee" => 'required',
            "marque_id" => 'required'
        ]);

        $save = Modele::create([
            "modele_name" => $data['modele_name'],
            "annee" => $data['annee'],
            "marque_id" => $data['marque_id']
        ]);

        return redirect()->route('cars')->with('success', 'Nouveau modèle ajouté avec succès!');
    }


    public function modifyModel() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('carManagement.modifyModel', compact('nom', 'prenom'));
    }
}
