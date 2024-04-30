<?php

use App\Http\Controllers\EleveController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\PersonnelController;
use Illuminate\Support\Facades\Route;



/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/eleve',[EleveController::class,'index'])->name('eleve');
Route::get('/liste-eleve',[EleveController::class,'liste'])->name('liste');
Route::post('/storeeleves',[EleveController::class,'store'])->name('enregistrerEleve');
Route::get('/update-eleve/{id}',[EleveController::class,'updateeleve']);
Route::post('/updatestoreeleve',[EleveController::class,'updatestoreeleve']);
Route::get('/delete-eleve/{id}',[EleveController::class,'deleteeleve']);


Route::get('/partenaire',[PartenaireController::class,'index'])->name('partenaire');
Route::get('/liste-partenaire',[PartenaireController::class,'liste'])->name('liste1');
Route::post('/storepartenaires',[PartenaireController::class,'store'])->name('enregistrerPartenaire');
Route::get('/update-partenaire/{IDPartenaire}',[PartenaireController::class,'updatepartenaire']);
Route::post('/updatestorepartenaire',[PartenaireController::class,'updatestorepartenaire']);
Route::get('/delete-partenaire/{id}',[PartenaireController::class,'deletepartenaire']);


Route::get('/niveau',[NiveauController::class,'index'])->name('niveau');
Route::get('/liste-niveau',[NiveauController::class,'liste'])->name('liste2');
Route::post('/storeniveaux',[NiveauController::class,'store'])->name('enregistrerNiveau');
Route::get('/update-niveau/{id}',[NiveauController::class,'updateniveau']);
Route::post('/updatestoreniveau',[NiveauController::class,'updatestoreniveau']);
Route::get('/delete-niveau/{id}',[NiveauController::class,'deleteniveu']);

Route::get('/personnel',[PersonnelController::class,'index'])->name('personnel');
Route::get('/liste-personnel',[PersonnelController::class,'liste'])->name('liste3');
//Route::post('/storepersonnels',[PersonnelController::class,'store'])->name('enregistrerPersonnel');
//Route::get('/update-personnel/{id}',[PersonnelController::class,'updatepersonnel']);
//Route::post('/updatestorepersonnel',[PersonnelController::class,'updatestorepersonnel']);

Route::get('admin/admin/groupe', function () {
    return view('admin.admin.groupe');
});
Route::get('admin/admin/departement', function () {
    return view('admin.admin.departement');
});
Route::get('admin/admin/niveau', function () {
    return view('admin.admin.niveau');
});
Route::get('admin/admin/inscription', function () {
    return view('admin.admin.inscription');
});
Route::get('admin/emploidutemps/heure', function () {
    return view('admin.emploidutemps.heure');
});
Route::get('admin/emploidutemps/salle', function () {
    return view('admin.emploidutemps.salle');
});
Route::get('admin/emploidutemps/cours', function () {
    return view('admin.emploidutemps.cours');
});
Route::get('admin/note/note', function () {
    return view('admin.note.note');
});
Route::get('admin/suivi/absence', function () {
    return view('admin.suivi.absence');
});
Route::get('admin/suivi/retard', function () {
    return view('admin.suivi.retard');
});
Route::get('admin/page/accueil', function () {
    return view('admin.page.accueil');
});
Route::get('admin/page/partenaire', function () {
    return view('admin.page.partenaire');
});

Route::get('admin/page/etudiant', function () {
    return view('admin.page.etudiant');
});
Route::get('admin/page/professeur', function () {
    return view('admin.page.professeur');
});
Route::get('admin/page/administratif', function () {
    return view('admin.page.administratif');
});
Route::get('admin/page/annonce', function () {
    return view('admin.page.annonce');
});
Route::get('admin/generation/attestation/inscription', function () {
    return view('admin.generation.attestation.inscription');
});
Route::get('admin/generation/attestation/scolarite', function () {
    return view('admin.generation.attestation.scolarite');
});
Route::get('admin/generation/attestation/certificat', function () {
    return view('admin.generation.attestation.certificat');
});
Route::get('admin/generation/attestation/diplome', function () {
    return view('admin.generation.attestation.diplome');
});
Route::get('admin/generation/paiement/inscription', function () {
    return view('admin.generation.paiement.inscription');
});
Route::get('admin/generation/paiement/mensualite', function () {
    return view('admin.generation.paiement.mensualite');
});
Route::get('admin/generation/paiement/periode', function () {
    return view('admin.generation.paiement.periode');
});
Route::get('admin/generation/emploidutemps/professeur', function () {
    return view('admin.generation.emploidutemps.professeur');
});
Route::get('admin/generation/emploidutemps/eleve', function () {
    return view('admin.generation.emploidutemps.eleve');
});
Route::get('admin/generation/bulletin', function () {
    return view('admin.generation.bulletin');
});