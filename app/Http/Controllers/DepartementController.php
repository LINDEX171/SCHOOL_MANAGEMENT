<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    { 
      return view("admin.departements.departement");
    }

    public function liste()
    {
        $departement = Departement::all();
      return view("admin.departements.liste-departement", compact('departement'));
    }

    public function store(Request $request)
    {
        $departement = new Departement(); 
        $departement->NomDepartement = $request->NomDepartement;
        $departement->Description = $request->Description;
        $departement->DateCreation = $request->DateCreation;
        $departement->Responsable = $request->Responsable;
        $departement->NombreEmployes = $request->NombreEmployes;
        $departement->NombreEtudiants = $request->NombreEtudiants;
        $departement->Equipements = $request->Equipements;
        $departement->Contacts = $request->Contacts;
        
        $departement->save();
 
      return redirect()->route('liste4')->with('success', 'Departement ajouté avec succès');
}

public function updatedepartement($id)
{
    $departement = Departement::find($id);
    return view("admin.departements.update", compact('departement'));
}


public function updatestoredepartement(Request $request)
{
    $departement = Departement::find($request->id);
    $departement->NomDepartement = $request->NomDepartement;
    $departement->Description = $request->Description;
    $departement->DateCreation = $request->DateCreation;
    $departement->Responsable = $request->Responsable;
    $departement->NombreEmployes = $request->NombreEmployes;
    $departement->NombreEtudiants = $request->NombreEtudiants;
    $departement->Equipements = $request->Equipements;
    $departement->Contacts = $request->Contacts;
    $departement->update(); 
    return redirect('/liste-departement')->with('success', 'Departement modifié avec succès');
}

public function deletedepartement($id)
{
    $departement = Departement::find($id);
    $departement->delete();
    return redirect('/liste-departement')->with('success', 'departement supprimé avec succès');
}
}
