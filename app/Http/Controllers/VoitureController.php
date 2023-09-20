<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Marque;
use App\Models\Modele;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoitureController extends Controller
{   



    
    public function cars(){
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $cars = Voiture::all();
        $cars_list = [];
        foreach($cars as $item){
            $car = $item->cars_modele;
            $cars_list = $car;
        }
      /*    dd($cars[1]->cars_modele->marque->category);   */
        return view('carManagement.cars', compact('nom', 'prenom', 'cars', 'cars_list'));
    }

    public function addcar(){
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $data_cat = Categorie::all();
        $data_model = Modele::all();
        $data_marque = Marque::all();
        return view('carManagement.addcar', compact('nom', 'prenom', 'data_model', 'data_marque', 'data_cat'));
    }

    public function seeMore($id_voiture){
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $cars = Voiture::all();
        $data = $cars->where('id_voiture', $id_voiture)->first();
        $data_cars = $data->cars_modele;
        /* $cars_list = [];
        foreach($data as $item){
            $car = $item->cars_modele;
            $cars_list = $car;
        } */
       /*   dd($data_cars);  */
        return view('carManagement.seeMore', compact('nom', 'prenom','id_voiture', 'data', 'data_cars'));
    }

    public function see_all_voiture()
    {
        $voiture = Voiture::all();
    }

    public function add_cars(Request $request)
    {
        $data = $request->all();
        $request->validate([
            "boite_vitesse" => "required",
            "puissance" => "required",
            "nbre_porte" => "required",
            "carburant" => "required",
            "nbre_cylindre" => "required",
            "soupape" => "required",
            "vitesse_max" => "required",
            "carosserie" => "required",
            "transmission" => "required",
            "frein" => "required",
            "acceleration" => "required",
            "couleur" => "required",
            "image_principale" => "required",
            "image_secondaire" => "required",
            "image_tertiaire" => "required",
            "modele_id" => "required"
        ]);

        if ($data['image_principale']) {
            $photo = $data['image_principale'];
            $path_1 = $photo->store('image_principale');
        };
        if ($data['image_secondaire']) {
            $photo = $data['image_secondaire'];
            $path_2 = $photo->store('image_secondaire');
        };
        if ($data['image_tertiaire']) {
            $photo = $data['image_tertiaire'];
            $path_3 = $photo->store('image_tertiaire');
        };

        $save = Voiture::create([
            "boite_vitesse" => $data['boite_vitesse'],
            "puissance" => $data['puissance'],
            "nbre_porte" => $data['nbre_porte'],
            "carburant" => $data['carburant'],
            "nbre_cylindre" => $data['nbre_cylindre'],
            "soupape" => $data['soupape'],
            "vitesse_max" => $data['vitesse_max'],
            "carosserie" => $data['carosserie'],
            "transmission" => $data['transmission'],
            "frein" => $data['frein'],
            "acceleration" => $data['acceleration'],
            "couleur" => $data['couleur'],
            "image_principale" => $path_1,
            "image_secondaire" => $path_2,
            "image_tertiaire" => $path_3,
            "modele_id" => $data['modele_id']
        ]);
        return redirect()->route('cars')->with('success', 'Nouvelle voiture ajoutée avec succès!');
    }
}
