<?php

namespace App\Http\Controllers;

use App\Models\ChiefPharmacist;
use App\Models\Doctor;
use App\Models\Pharmacist;
use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function getUsers()
    {

        $users = User::all();
        return view('users', compact('users'));
    }

    public function getAddUser()
    {
        return view('addUser');
    }

    public function postAddUser(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'type' => 'required',
        ]);

        // Générer un mot de passe aléatoire de 10 caractères avec Str::random()
        $password = Str::random(10);

        // Hasher le mot de passe pour le stocker en toute sécurité
        $hashedPassword = Hash::make($password);

        // Créer un nouvel utilisateur
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $hashedPassword;
        $user->save();

        if ($validatedData['type'] == 1) {
            $chiefPharmacist = new ChiefPharmacist();
            $chiefPharmacist->user_id = $user->id;
            $chiefPharmacist->save();
        } elseif ($validatedData['type'] == 2) {
            $pharmacist = new Pharmacist();
            $pharmacist->user_id = $user->id;
            $pharmacist->save();
        }

        // Envoyer le mot de passe par email avec le message non haché
        $message = "Voici vos paramètres de connexion email: {$user->email} et mot de passe: $password";
        Mail::raw($message, function ($message) use ($user) {
            $message->to($user->email)->subject('Vos informations de connexion');
        });

        // Redirigez ou affichez un message de succès
        return redirect()->route('getAddUser')->with('success', 'Votre ajout a été effectuée avec succès.');
    }

    public function getaddmedecin()
    {
        $services = Service::all();

        return view('addmedecin', compact('services'));
    }

    public function getMed()
    {
        $medecins = Doctor::all();
        //$medecins = Doctor::with(['user', 'service'])->get();


        return view('medecins', compact('medecins'));
    }

    public function postAddMed(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'service' => 'required|string|max:255',

        ]);

        $serviceInfo = Service::where('id', $request->input('service'))->first();
        // dd($serviceInfo);
        
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email=$serviceInfo->email;
        $user->password=$serviceInfo->password;
        $user->save();

        $doctor = new Doctor();
        $doctor->telephone = $validatedData['telephone'];
        $doctor->speciality = $validatedData['speciality'];
        $doctor->service_id = $validatedData['service'];
        $doctor->user_id = $user->id;
        $doctor->save();


        // Redirigez ou affichez un message de succès
        return redirect()->route('getaddmedecin')->with('success', 'Votre ajout a été effectuée avec succès.');
    }

    public function updateUser(Request $request, $id)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        // Trouvez l'utilisateur par son ID et mettez à jour les données
        $user = User::findOrFail($id);
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();

        return redirect()->route('getUsers')->with('success', 'L\'utilisateur a été mis à jour avec succès.');
    }


    public function updateMed(Request $request, $id)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telephone' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            // 'service' => 'required|string|max:255',
        ]);

        // Trouvez l'utilisateur par son ID et mettez à jour les données
        $doctor = Doctor::findOrFail($id);
        $doctor->user->name = $validatedData['name'];
        $doctor->user->email = $validatedData['email'];
        $doctor->telephone = $validatedData['telephone'];
        $doctor->speciality = $validatedData['speciality'];
        // $doctor->service_id = $validatedData['service'];
        $doctor->user->save();
        $doctor->save();

        return redirect()->route('getMed')->with('success', 'Le Médecin a été mis à jour avec succès.');
    }
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('getUsers')->with('success', 'Utilisateur supprimé avec succès');
        }

        return redirect()->route('getUsers')->with('error', 'Utilisateur non trouvé');
    }

    public function destroym($id)
    {
        $med = Doctor::find($id);

        if ($med) {
            $med->delete();
            return redirect()->route('getMed')->with('success', 'medecin supprimé avec succès');
        }

        return redirect()->route('getMed')->with('error', 'medecin non trouvé');
    }
}
