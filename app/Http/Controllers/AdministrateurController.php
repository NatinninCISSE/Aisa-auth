<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdministrateurController extends Controller
{
    public function form_register()
    {
        return view('inscription');
    }
    public function recuperation()
    {
        $Client = Client::find(1); // Récupère l'utilisateur avec l'id 1
        $reclamations = $client->reclamations; // Récupère toutes les réclamations de l'utilisateur
        $Client = Client::with('reclamations')->get(); // Récupère tous les utilisateurs avec leurs réclamations préchargées

        $Client = Client::find(1);
        $cultures = Culture::find(2);
        $Client->cultures()->attach($culture);
        $culture = Culture::find;
        $Client->cultures()->detach($culture);

        $culture = Culture::find(1);
        $etapes = $culture->etapes;
        $etape = Etape::find(1);
        $cultures = $etape->cultures;



        


    }

    public function form_traitement(Request $request)
    {
        $request ->validate([
            'nom_admin'=> 'required',
            'prenom_admin'=> 'required',
            'mail_admin'=> 'email|required|unique:administrateurs',
            'password_admin'=> 'required|unique:min:8',


        ]);
        
        $administrateur= new Administrateurs();
        $administrateur->nom_admin = $request ->input('nom_admin');
        $administrateur->prenom_admin = $request ->input('prenom_admin');
        $administrateur->mail_admin = $request ->input('mail_admin');
        $administrateur->password_admin = $request ->input('password_admin');

        $client ->save();

        return redirect('accueil');

    }
}