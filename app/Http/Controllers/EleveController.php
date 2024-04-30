<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index()
    { 
      return view("admin.eleves.eleve");
    
    }

    public function liste()
    {
        $eleve = Eleve::all();
      return view("admin.eleves.liste-eleve", compact('eleve'));
    }

    public function store(Request $request)
    {
        $eleve = new Eleve(); 
        $eleve->Matricule = $request->Matricule;
        $eleve->Prénom = $request->Prénom;
        $eleve->Nom = $request->Nom;
        $eleve->Adresse = $request->Adresse;
        $eleve->Email = $request->Email;
        $eleve->DateNaissance = $request->DateNaissance;
        $eleve->LieuNaissance = $request->LieuNaissance;
        $eleve->Pays = $request->Pays;
        $eleve->Nationalite = $request->Nationalite;
        $eleve->TelEleve = $request->TelEleve;
        $eleve->NomPere = $request->NomPere;
        $eleve->TelPere = $request->TelPere;
        $eleve->NomMere = $request->NomMere;
        $eleve->TelMere = $request->TelMere;
        $eleve->saisipar = $request->saisipar;
        
        
        $eleve->save();
 
      return redirect()->route('liste')->with('success', 'Eleve ajouté avec succès');
}

public function updateeleve($id)
{
    $eleve = Eleve::find($id);
    return view("admin.eleves.update", compact('eleve'));
}


public function updatestoreeleve(Request $request)
{
    $eleve = Eleve::find($request->id);
    $eleve->Matricule = $request->Matricule;
    $eleve->Prénom = $request->Prénom;
    $eleve->Nom = $request->Nom;
    $eleve->Adresse = $request->Adresse;
    $eleve->Email = $request->Email;
    $eleve->DateNaissance = $request->DateNaissance;
    $eleve->LieuNaissance = $request->LieuNaissance;
    $eleve->Pays = $request->Pays;
    $eleve->Nationalite = $request->Nationalite;
    $eleve->TelEleve = $request->TelEleve;
    $eleve->NomPere = $request->NomPere;
    $eleve->TelPere = $request->TelPere;
    $eleve->NomMere = $request->NomMere;
    $eleve->TelMere = $request->TelMere;
    $eleve->saisipar = $request->saisipar;
    $eleve->update(); 
    return redirect('/liste-eleve')->with('success', 'eleve modifié avec succès');
}

public function deleteeleve($id)
{
    $eleve = Eleve::find($id);
    $eleve->delete();
    return redirect('/liste-eleve')->with('success', 'élève supprimé avec succès');
}
    
}
