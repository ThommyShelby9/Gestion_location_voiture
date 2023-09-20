<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{

    public function login(){
        return view('connection.login');
    }

    public function register(){
        return view('registrations.register');
    }

    public function send_register(Request $request){
        $data = $request->all();
        $request->validate([
            "nom" => "required",
            "prenom" => "required",
            'email' => array(
                "required",
                "regex:/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/",
                "unique:users"
            ),
            'password' => array(
                "required",
                "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&#^_;:,])[A-Za-z\d@$!%?&#^_;:,]{8,}$/",
                "confirmed:password_confirmation"
            )
        ]);

        $save = User::create([
            "nom" => $data['nom'],
            "prenom" => $data['prenom'],
            "email" => $data['email'],
            "password" => Hash::make($data['password'])
        ]);


        $url = Url::temporarySignedRoute(
            'email_verified',
            now()->addMinutes(30),
            ['email' => $data['email']]
        );

        Mail::send('mail', ['url' => $url, 'nom' => $data['nom'] . ' ' . $data['prenom']], function ($message) use ($data) {
            $config = config('mail');
            $message->subject('Registration verification !')
                ->from($config['from']['address'], $config['from']['name'])
                ->to($data['email'], $data['nom'], $data['prenom']);
        });
        

        return redirect()->back()->with('success', 'Compte enregistré, veuillez verifier votre mail!');
    }

    public function verify(Request $request, $email)
    {
        $user = User::where('email', $email)->first();
        if (!$user) {
            abort(404);
        };

        if (!$request->hasValidSignature()) {
            abort(404);
        };

        $user->update([
            'email_verify_at' => now(),
            'email_verify' => true,
        ]);
        return redirect()->route('login')->with('success', "Compte activé avec succès!");
    }

    public function authentification(Request $request){
        $user = Auth::attempt(['email'=>$request->email, 'password'=>$request->password, 'email_verify'=>true]);
        if($user){
         return redirect()->route('customers');
        };
 
        return redirect()->back()->with('errors', 'Combinaison email/password invalide !');
     }

     public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
