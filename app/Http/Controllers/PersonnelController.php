<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index()
    { 
      return view("admin.personnels.personnel");
    }

    public function liste()
    {
        $personnel = Personnel::all();
      return view("admin.personnels.liste-personnel", compact('personnel'));
    }

    public function store(Request $request)
    {
        $personnel = new Personnel(); 
        $personnel->Civilite = $request->Civilite;
        $personnel->Nom = $request->Nom;
        $personnel->Prenom = $request->Prenom;
        $personnel->Telephone = $request->Telephone;
        $personnel->Email = $request->Email;
        $personnel->Saisipar = $request->Saisipar;
        $personnel->Matricule = $request->Matricule;

       
        $personnel->save();
 
      return redirect()->route('liste7')->with('success', 'Personnel ajouté avec succès');
}

public function updatepersonnel($id)
{
    $personnel = Personnel::find($id);
    return view("admin.personnels.update", compact('personnel'));
}


public function updatestorepersonnel(Request $request)
{
    $personnel = Personnel::find($request->id); 
    $personnel->Civilite = $request->Civilite;
    $personnel->Nom = $request->Nom;
    $personnel->Prenom = $request->Prenom;
    $personnel->Telephone = $request->Telephone;
    $personnel->Email = $request->Email;
    $personnel->Saisipar = $request->Saisipar;
    $personnel->Matricule = $request->Matricule;
    $personnel->update(); 
    return redirect('/liste-personnel')->with('success', 'personnel modifié avec succès');
}

public function deletepersonnel($id)
{
    $personnel = Personnel::find($id);
    $personnel->delete();
    return redirect('/liste-personnel')->with('success', 'personnel supprimé avec succès');
}
}
