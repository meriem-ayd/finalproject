<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\User;
use App\Models\Doctor;
use App\Models\BonLivraisonService;
use App\Models\BonCommandeService;
use App\Models\Ordonnance;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDashboard()
    {

          // Récupérer le nombre de services
          $nombreServices = Service::count();

          // Récupérer le nombre d'utilisateurs
          $nombreUsers = User::count();

          //
          $nbrmedecins=Doctor::count();
          //
          $nbrbl=BonLivraisonService::count();

          $nbrbcs=BonCommandeService::count();
          //
        //   if (Auth::check()) {
        //     $user = auth()->user();
        //     if ($user->doctor) {
        //   $nbrord=Ordonnance::count();
        //     }}
        $nbrbcs = 0;
        $nbrOrdos = 0;
        $user = auth()->user();
        if ($user->doctor) {
           $medecinId = $user->doctor->id;
             $nbrbcs = BonCommandeService::countLivredByMedecin($medecinId);
             $nbrOrdos = Ordonnance::countLivredByMedecin($medecinId);

        }
          return view('dashboard', compact('nombreServices', 'nombreUsers','nbrmedecins','nbrOrdos','nbrbcs'));
        }


    // public function dashboard()
    // {
    //     // Récupérer le nombre de services
    //     $nombreServices = Service::count();

    //     // Récupérer le nombre d'utilisateurs
    //     $nombreUsers = User::count();

    //     //
    //     $nbrmedecins=Doctor::count();
    //     //
    //     $nbrbl=BonLivraisonService::count();

    //     $nbrbcs=BonCommandeService::count();


    //     // Passer les données à la vue
    //     return view('dashboard', compact('nombreServices', 'nombreUsers','nbrmedecins','nbrbl','nbrbcs'));
    // }

    public function  acceuil()
    {
        return view('acceuil');
    }
}
