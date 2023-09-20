<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{   
    public function customers(){
        $client = Client::all();
        /*  dd($client); */
         $user = Auth::user();
         $nom = $user ? $user->nom :"";
         $prenom = $user ? $user->prenom: "";
        return view('customerManagement.customers',  compact('nom', 'prenom', 'client'));
    }

    public function addcusto(){
         $user = Auth::user();
         $nom = $user ? $user->nom :"";
         $prenom = $user ? $user->prenom: "";
        return view('customerManagement.addcusto',  compact('nom', 'prenom'));
    }

    public function modifycusto($id_client){
         $user = Auth::user();
         $nom = $user ? $user->nom :"";
         $prenom = $user ? $user->prenom: "";
         $studentInfo = Client::all();
         $data = Client::where('id_client', $id_client)->first();
        return view('customerManagement.modifycusto',  compact('nom', 'prenom','data', 'id_client'));
    }
/* 
    public function see_client(){
        $client = Client::all();
        $user = Auth::user();
        $nom = $user ? $user->nom :"";
        $prenom = $user ? $user->prenom: "";
        return view('interfaces.modifycusto', compact('nom', 'prenom'));
    }
 */
/* 
   public function addStudent()
   {
    $user = Auth::user();
    $nom = $user ? $user->nom :"";
    $prenom = $user ? $user->prenom: "";
      return view('addetudiant');
   }

   public function add($id_client)
   {
    $user = Auth::user();
    $nom = $user ? $user->nom :"";
    $prenom = $user ? $user->prenom: "";
      $student = Client::all();
      $data = Client::find($id_client);
      return view('addetudiant', compact('id_client', 'data', 'student'));
   } */

    public function send_customers(Request $request){
        $data = $request->all();

        $validate = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required",
            "adresse" => "required",
            "photo" => "required",
            "cni" => "required",
            "tel" => "required"
        ]);

       /*  dd($data['photo']); */
        
      if ($data["photo"]) {
            $path = $data["photo"]->store('photo');
        }; 

        $save = Client::create([
            "nom" => $data['nom'],
            "prenom" => $data['prenom'],
            "tel" => $data['tel'],
            "adresse" => $data['adresse'],
            "photo" => $path,
            "cni" => $data['cni'],
            "email" => $data['email']
        ]);
        return redirect()->route('customers')->with('message', 'Nouvel ajout efféctué !');
    }


 public function modifyCustomersInfo(Request $request, $id_client){
    $data = $request->all();
    if ($data["photo"]) {
        $path = $data["photo"]->store('photo');
    }; 

    Client::where('id_client',$id_client)->update([
        "nom" => $data['nom'],
        "prenom" => $data['prenom'],
        "tel" => $data['tel'],
        "adresse" => $data['adresse'],
        "photo" => $path,
        "cni" => $data['cni'],
        "email" => $data['email'] 
    ]);
 /*    $validation = $request->validate([
       "name" => "required",
       "surname" => "required",
       "speciality" => "required",
       "birthday" => "required",
       "hobbies" => "required",
       "bio" => "required",
       "photo" => "required",
    ]); */

   return redirect()->route('customers')->with('message', 'Modification effectuée !');
 }
}
