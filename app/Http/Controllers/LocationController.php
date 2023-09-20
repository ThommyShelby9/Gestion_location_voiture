<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Location;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationController extends Controller
{
    //
    public function rental() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $locat = Client::with('location')->has('location')->get();
       $location_list = Location::all();
      /*   $cars_list = [];
        foreach($locat as $item){
            $location = $item->cars_modele;
            $cars_list = $location;
        } */
       /*  dd($locat); */
      /*   foreach($location_list as $item){
            $car = $item->cars_modele;
            $cars_list = $car;
        } */
        return view('rentalManagement.rental', compact('nom', 'prenom', 'location_list','locat'));
    }

    public function addRental() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $client = Client::all();
        $cars = Voiture::all();
        $cars_list = [];
        foreach($cars as $item){
            $car = $item->cars_modele;
            $cars_list = $car;
        }

        return view('rentalManagement.addRental', compact('nom', 'prenom', 'client','cars', 'cars_list'));
    }

    public function send_rental(Request $request){

        $data = $request->all();
        $request->validate([
            "id_client" => 'required',
            "id_voiture" => 'required', 
            "date_sortie_voiture" => 'required',
            "date_prevue_retour" => 'required'
        ]);

        $save = Location::create([
            "id_client" => $data['id_client'],
            "id_voiture" => $data['id_voiture'],
            "date_sortie_voiture" => $data['date_sortie_voiture'],
            "date_prevue_retour" => $data['date_prevue_retour']
        ]);
        return redirect()->route('rental')->with('success', 'Nouvelle location effectuée avec succès !');
    }
}
