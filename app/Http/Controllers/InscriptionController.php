<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    { 
      $eleves = Eleve::all();
      $classes = Classe::all();
      return view('admin.inscriptions.inscription', compact('classes', 'eleves'));
    }

    public function liste()
    {
        $inscription = Inscription::all();
      return view("admin.inscriptions.liste-inscription", compact('inscription'));
    }

    public function store(Request $request)
    {
        $inscription = new Inscription(); 
        $inscription->classe_id = $request->classe_id;
        $inscription->eleve_id = $request->eleve_id;
        $inscription->Annee = $request->Annee;
        $inscription->Montant = $request->Montant;
        $inscription->MontantPaye = $request->MontantPaye;
        $inscription->Valide = $request->Valide;
        $inscription->Paye = $request->Paye;
        $inscription->Inscrit = $request->Inscrit;
        $inscription->DateInscription = $request->DateInscription;
        $inscription->HeureInscription = $request->HeureInscription;
        $inscription->NoInscription = $request->NoInscription;
        $inscription->Subvention = $request->Subvention;
        $inscription->Reliquat = $request->Reliquat;
        
        $inscription->save();
 
      return redirect()->route('liste6')->with('success', 'Inscription ajouté avec succès');
}

public function updateinscription($id)
{
    $classes = Classe::all();
    $eleves = Eleve::all();
    $inscription = Inscription::find($id);
    return view("admin.inscriptions.update", compact('inscription', 'classes', 'eleves'));
}


public function updatestoreinscription(Request $request)
{
    $inscription = Inscription::find($request->id); 
    $inscription->classe_id = $request->classe_id;
    $inscription->eleve_id = $request->eleve_id;
    $inscription->Annee = $request->Annee;
    $inscription->Montant = $request->Montant;
    $inscription->MontantPaye = $request->MontantPaye;
    $inscription->Valide = $request->Valide;
    $inscription->Paye = $request->Paye;
    $inscription->Inscrit = $request->Inscrit;
    $inscription->DateInscription = $request->DateInscription;
    $inscription->HeureInscription = $request->HeureInscription;
    $inscription->NoInscription = $request->NoInscription;
    $inscription->Subvention = $request->Subvention;
    $inscription->Reliquat = $request->Reliquat;
    $inscription->update(); 
    return redirect('/liste-inscription')->with('success', 'Inscription modifié avec succès');
}

public function deleteinscription($id)
{
    $inscription = Inscription::find($id);
    $inscription->delete();
    return redirect('/liste-inscription')->with('success', 'inscription supprimé avec succès');
}
}
