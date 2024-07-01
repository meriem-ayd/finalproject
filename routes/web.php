<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DciController;
use App\Http\Controllers\DashboardMedecinController;
use App\Http\Controllers\BonCommandeController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PharmacienController;
use App\Http\Controllers\UserController;



# Admin Auth
Route::get('/', '\App\Http\Controllers\DashboardController@acceuil')->name('acceuil');

Route::get('/admin-auth', '\App\Http\Controllers\AuthController@getAdminAuth')->name('getAdminAuth');
Route::post('/admin-auth', '\App\Http\Controllers\AuthController@postAdminAuth')->name('postAdminAuth');

Route::middleware(['userMiddleware'])->group(function () {
    # Admin Logout
    Route::get('/logout', '\App\Http\Controllers\AuthController@getAdminLogout')->name('getAdminLogout');
    # Admin Dashboard
    Route::get('/dashboard', '\App\Http\Controllers\DashboardController@getDashboard')->name('getDashboard');

    Route::middleware(['adminMiddleware'])->group(function () {
        Route::get('/users', '\App\Http\Controllers\UserController@getUsers')->name('getUsers');
        Route::get('/add-user', '\App\Http\Controllers\UserController@getAddUser')->name('getAddUser');
        Route::post('/add-user', '\App\Http\Controllers\UserController@postAddUser')->name('postAddUser');
        Route::get('/medecins', '\App\Http\Controllers\UserController@getMed')->name('getMed');
        Route::get('/addmedecin', '\App\Http\Controllers\UserController@getaddmedecin')->name('getaddmedecin');
        Route::post('/addmedecin', '\App\Http\Controllers\UserController@postAddMed')->name('postAddMed');

        // routes/web.php
        Route::delete('/getUsers/{id}', [UserController::class, 'destroy'])->name('deleteUser');

        Route::delete('/getMed/{id}', [UserController::class, 'destroy'])->name('deleteMed');

        // Route::put('/users/{id}/edit', [UserController::class, 'postEditUser'])->name('postEditUser');

        Route::put('/getUsers/{id}', '\App\Http\Controllers\UserController@updateUser')->name('updateUser');
        Route::put('/getMed/{id}', '\App\Http\Controllers\UserController@updateMed')->name('updateMed');






        // Route::get('/liste_dci', '\App\Http\Controllers\DciController@listeDCI')->name('liste_dci');
        Route::get('/liste_dci', [DciController::class, 'listeDCI'])->name('liste_dci');
        Route::put('/medecin/dcis/{id}', '\App\Http\Controllers\DciController@updateDCI')->name('updateDCI');
        Route::get('/ajouter-dci', '\App\Http\Controllers\DciController@getDCI')->name('getDCI');
        Route::post('/ajouter-dci', '\App\Http\Controllers\DciController@postDCI')->name('ajouter_dci');

        Route::get('/listeService', '\App\Http\Controllers\serviceController@listeServices')->name('listeServices');
        Route::put('/listeService/{id}', '\App\Http\Controllers\serviceController@updateService')->name('updateService');
        Route::get('/ajouterService', '\App\Http\Controllers\serviceController@getService')->name('getService');
        Route::post('/ajouterService', '\App\Http\Controllers\serviceController@store')->name('store');
        Route::delete('/listeService/{id}', '\App\Http\Controllers\serviceController@destroy')->name('destroy');
    });

    // Route::get('medecin/dashboardMedecin', [DashboardMedecinController::class, 'getDashboardMedecin'])->name('getDashboardMedecin');

    Route::middleware(['doctor'])->group(function () {
        Route::get('/bondecommande', [MedecinController::class, 'bondecommande'])->name('bondecommande');
        Route::post('/bon_commande_service', [MedecinController::class, 'storeBonDeCommande'])->name('bon_commande_service.store');
        Route::get('/bons-de-commande', [MedecinController::class, 'listeBonsDeCommandeMedecin'])->name('bons-de-commande.medecin');
        Route::put('/bonDeCommande/{id}', [MedecinController::class, 'update'])->name('updateBonDeCommande');
        Route::get('/detailboncommande/{id}', [MedecinController::class, 'getbon'])->name('getbon');


        Route::get('/ordonnance', [MedecinController::class, 'create'])->name('ordonnance.create');
        Route::post('/ordonnance', [MedecinController::class, 'store'])->name('ordonnance.store');
        Route::put('/ordonnances-{id}', [MedecinController::class, 'updateord'])->name('updateord');

        Route::get('/listeordonnance', [MedecinController::class, 'listeOrdonnances'])->name('ordonnance.liste');
        Route::get('/ordonnances-{id}', [MedecinController::class, 'show'])->name('ordonnances');
        Route::get('/medecin-bon-livraison', [MedecinController::class, 'listeBonsDeLivraison'])->name('medecin.bonsDeLivraison');
        Route::get('/medecin-bon-livraison-{id}', [MedecinController::class, 'showBonLivraison'])->name('medecin.showBonLivraison');
    });

    Route::middleware(['pharmacist'])->group(function () {
        Route::get('/liste_dci', [DciController::class, 'listeDCI'])->name('liste_dci');
        Route::put('/medecin/dcis/{id}', '\App\Http\Controllers\DciController@updateDCI')->name('updateDCI');
        //boncommandefournisseur
        Route::get('/AjouterBCF', [PharmacienController::class, 'bonCF'])->name('bonCF');
        Route::post('/AjouterBCF', [PharmacienController::class, 'createBonCommandeFournisseur'])->name('createBonCommandeFournisseur');
        //details du bondecommandefournisseur
        Route::get('/listeBCF', [PharmacienController::class, 'listeBonsDeCommandeFournisseur'])->name('listeBonsDeCommandeFournisseur');
        Route::get('/DetailsBCF-{id}', [PharmacienController::class, 'details'])->name('details');

        Route::put('/update-bon/{id}', [PharmacienController::class, 'update'])->name('updateBon');
        Route::post('/updateBCF/{id}', [PharmacienController::class, 'updateBCF'])->name('updateBCF');
        Route::post('/bon-commande-fournisseur/{id}/valider', [PharmacienController::class, 'validerBonCommandeFournisseur'])->name('validerBCF');
        // etatstock
        Route::get('/etat-stock-form', [DciController::class, 'showEtatStockForm'])->name('showEtatStockForm');
        Route::post('/etat-stock', [DciController::class, 'getEtatStock'])->name('getEtatStock');

        //bondereception
        Route::get('/AjouterBR-{id_bcf}', [PharmacienController::class, 'bonCR'])->name('bonCR');
        Route::post('/AjouterBR-{id_bcf}', [PharmacienController::class, 'createBonCommandeReception'])->name('createBonCommandeReception');
        Route::get('listeBR', [PharmacienController::class, 'listeBonsReception'])->name('listeBonsReception');

        //
        Route::get('/DetailsBCR/{id}', [PharmacienController::class, 'detailsBR'])->name('detailsBR');
        Route::get('/quantite-form', [DciController::class, 'showQuantiteForm'])->name('show.quantite.form');
        Route::post('/get-quantite', [DciController::class, 'getQuantite'])->name('get.quantite');


        Route::get('/liste-bons-de-commande', [PharmacienController::class, 'listeTousBonsDeCommande'])->name('pharmacien.listeBonsDeCommande');
        Route::get('/consultbc-{id}', [PharmacienController::class, 'getbc'])->name('getbc');
        Route::get('/bon-livraison-{id_bcs}', [PharmacienController::class, 'create'])->name('bonlivraison.create');
        Route::post('/bon-livraison', [PharmacienController::class, 'store'])->name('bonlivraison.store');
        // liste et details
        Route::get('/pharmacien-listebonlivraison', [PharmacienController::class, 'listeBonsDeLivraison'])->name('pharmacien.listebonlivraison');
        Route::get('/bonlivraison-{id}', [PharmacienController::class, 'show'])->name('show');

        // ordonnance
        Route::get('/liste-ordonnances-pharmacien', [PharmacienController::class, 'listeOrdonnancesPharmacien'])->name('ordonnances.pharmacien');
        Route::get('/ordonnance-pharmacien/{id}', [PharmacienController::class, 'voirOrdonnancePharmacien'])->name('ordonnance.pharmacien');
        Route::get('/bon-livraison-ordonnance/{id_ordonnance}', [PharmacienController::class, 'createBonLivraisonOrdonnance'])->name('createBonLivraisonOrdonnance');
        Route::post('/bon-livraison-ordonnance', [PharmacienController::class, 'storeBonLivraisonOrdonnance'])->name('bonlivraisonord.store');
    });



    Route::middleware(['chiefOrAdmin'])->group(function () {
        Route::get('/listeService', [\App\Http\Controllers\ServiceController::class, 'listeServices'])->name('listeServices');
        Route::put('/listeService/{id}', [\App\Http\Controllers\ServiceController::class, 'updateService'])->name('updateService');
        Route::get('/ajouterService', [\App\Http\Controllers\ServiceController::class, 'getService'])->name('getService');
        Route::post('/ajouterService', [\App\Http\Controllers\ServiceController::class, 'store'])->name('store');

        Route::delete('/listeService/{id}', '\App\Http\Controllers\serviceController@destroy')->name('destroy');
        Route::get('/users', '\App\Http\Controllers\UserController@getUsers')->name('getUsers');
        Route::put('/getUsers/{id}', '\App\Http\Controllers\UserController@updateUser')->name('updateUser');
        Route::get('/liste_dci', [DciController::class, 'listeDCI'])->name('liste_dci');
        Route::put('/medecin/dcis/{id}', '\App\Http\Controllers\DciController@updateDCI')->name('updateDCI');

        //boncommandefournisseur
        Route::get('/AjouterBCF', [PharmacienController::class, 'bonCF'])->name('bonCF');
        Route::post('/AjouterBCF', [PharmacienController::class, 'createBonCommandeFournisseur'])->name('createBonCommandeFournisseur');
        //details du bondecommandefournisseur
        Route::get('/listeBCF', [PharmacienController::class, 'listeBonsDeCommandeFournisseur'])->name('listeBonsDeCommandeFournisseur');
        Route::get('/DetailsBCF-{id}', [PharmacienController::class, 'details'])->name('details');
        Route::post('/bon-commande-fournisseur/{id}/valider', [PharmacienController::class, 'validerBonCommandeFournisseur'])->name('validerBCF');

        //bondereception
        Route::get('/AjouterBR-{id_bcf}', [PharmacienController::class, 'bonCR'])->name('bonCR');
        Route::post('/AjouterBR-{id_bcf}', [PharmacienController::class, 'createBonCommandeReception'])->name('createBonCommandeReception');
        Route::get('listeBR', [PharmacienController::class, 'listeBonsReception'])->name('listeBonsReception');

        //
        Route::get('/DetailsBCR/{id}', [PharmacienController::class, 'detailsBR'])->name('detailsBR');

        Route::get('/etat-stock-form', [DciController::class, 'showEtatStockForm'])->name('showEtatStockForm');
        Route::post('/etat-stock', [DciController::class, 'getEtatStock'])->name('getEtatStock');

        Route::get('/liste-bons-de-commande', [PharmacienController::class, 'listeTousBonsDeCommande'])->name('pharmacien.listeBonsDeCommande');
        Route::get('/consultbc-{id}', [PharmacienController::class, 'getbc'])->name('getbc');
        Route::get('/bon-livraison-{id_bcs}', [PharmacienController::class, 'create'])->name('bonlivraison.create');
        Route::post('/bon-livraison', [PharmacienController::class, 'store'])->name('bonlivraison.store');
        // liste et details
        Route::get('/pharmacien-listebonlivraison', [PharmacienController::class, 'listeBonsDeLivraison'])->name('pharmacien.listebonlivraison');
        Route::get('/bonlivraison-{id}', [PharmacienController::class, 'show'])->name('show');

        // ordonnance
        Route::get('/liste-ordonnances-pharmacien', [PharmacienController::class, 'listeOrdonnancesPharmacien'])->name('ordonnances.pharmacien');
        Route::get('/ordonnance-pharmacien/{id}', [PharmacienController::class, 'voirOrdonnancePharmacien'])->name('ordonnance.pharmacien');
        Route::get('/bon-livraison-ordonnance/{id_ordonnance}', [PharmacienController::class, 'createBonLivraisonOrdonnance'])->name('createBonLivraisonOrdonnance');
        Route::post('/bon-livraison-ordonnance', [PharmacienController::class, 'storeBonLivraisonOrdonnance'])->name('bonlivraisonord.store');
        // etatstock
        Route::get('/etat-stock-form', [DciController::class, 'showEtatStockForm'])->name('showEtatStockForm');
        Route::post('/etat-stock', [DciController::class, 'getEtatStock'])->name('getEtatStock');
    });

    // Route::middleware(['chiefPharmacistMiddleware'])->group(function () {

    //     Route::get('/liste-bons-de-commande', [PharmacienController::class, 'listeTousBonsDeCommande'])->name('pharmacien.listeBonsDeCommande');
    //     Route::get('/consultbc/{id}', [PharmacienController::class, 'getbc'])->name('getbc');
    //     Route::get('/bon-livraison/{id_bcs}', [PharmacienController::class, 'create'])->name('bonlivraison.create');
    //     Route::post('/bon-livraison', [PharmacienController::class, 'store'])->name('bonlivraison.store');
    //     // liste et details
    //     Route::get('/pharmacien/listebonlivraison', [PharmacienController::class, 'listeBonsDeLivraison'])->name('pharmacien.listebonlivraison');
    //     Route::get('/bonlivraison/{id}', [PharmacienController::class, 'show'])->name('show');

    //     // ordonnance
    //     Route::get('/liste-ordonnances-pharmacien', [PharmacienController::class, 'listeOrdonnancesPharmacien'])->name('ordonnances.pharmacien');
    //     Route::get('/ordonnance-pharmacien/{id}', [PharmacienController::class, 'voirOrdonnancePharmacien'])->name('ordonnance.pharmacien');
    //     Route::get('/bon-livraison-ordonnance/{id_ordonnance}', [PharmacienController::class, 'createBonLivraisonOrdonnance'])->name('createBonLivraisonOrdonnance');
    //     Route::post('/bon-livraison-ordonnance', [PharmacienController::class, 'storeBonLivraisonOrdonnance'])->name('bonlivraisonord.store');

    // });



});
