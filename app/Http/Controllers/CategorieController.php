<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function category() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('carManagement.category', compact('nom', 'prenom'));
    }

    function add_categorie(Request $request){
        $data_categorie = $request->all();
        $request->validate([
            "name" => "required"
        ]);

        $save = Categorie::create([
            "name" => $data_categorie['name']
        ]);

        return redirect()->route('cars')->with('success', 'Categorie ajoutée avec succès');
    }

    public function modifyCategory() {
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        $data_categorie = Categorie::all();
        return view('carManagement.modifyCategory', compact('nom', 'prenom', 'data_categorie'));
    }

    function modifyCat(Request $request){
        $data = $request->all();
        $request->validate([
            'new_name' => 'required',
            "categorie_id" => 'required'
        ]);
        $save = Categorie::where('id_cat', $request->categorie_id)->update([
            "name" => $data['new_name']
        ]);

        return redirect()->route('cars')->with('success', 'Modification de la categorie effectuée avec succès !');
    }
}
