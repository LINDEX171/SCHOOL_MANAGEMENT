<?php

namespace App\Http\Controllers;

use App\Models\c;
use App\Models\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
      return view("admin.partenaires.partenaire");
    
    }

    public function liste()
    {
        $partenaire = Partenaire::all();
      return view("admin.partenaires.liste-partenaire", compact('partenaire'));
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $partenaire = new Partenaire(); 
        $partenaire->IDPartenaire = $request->IDPartenaire;
        $partenaire->Denomination = $request->Denomination;
        $partenaire->Adresse = $request->Adresse;
        $partenaire->Email = $request->Email;
        $partenaire->Tel = $request->Tel;
        $partenaire->Pays = $request->Pays;
        $partenaire->numero_compte = $request->numero_compte;
        $partenaire->montant_du = $request->montant_du;
        $partenaire->montant_paye = $request->montant_paye;
        $partenaire->montant_initial = $request->montant_initial;

        
         if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
         $file = $request->file('logo');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/partenaires/', $filename);
         $partenaire->logo = $filename;
}
         $partenaire->save();



return redirect()->route('liste1')->with('success', 'Partenair ajouté avec succès');
}


public function updatepartenaire($IDPartenaire)
    {
        $partenaire = Partenaire::find($IDPartenaire);
        return view("admin.partenaires.update", compact('partenaire'));
    }

    
    public function updatestorepartenaire(Request $request)
{

    $partenaire = Partenaire::find($request->IDPartenaire);
    $partenaire->Denomination = $request->Denomination;
    $partenaire->Adresse = $request->Adresse;
    $partenaire->Email = $request->Email;
    $partenaire->Tel = $request->Tel;
    $partenaire->Pays = $request->Pays;
    $partenaire->numero_compte = $request->numero_compte;
    $partenaire->montant_du = $request->montant_du;
    $partenaire->montant_paye = $request->montant_paye;
    $partenaire->montant_initial = $request->montant_initial;

    
     if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
     $file = $request->file('logo');
     $extension = $file->getClientOriginalExtension();
     $filename = time().'.'.$extension;
     $file->move('uploads/partenaires/', $filename);
     $partenaire->logo = $filename;
}
     $partenaire->save();

    return redirect('/liste-partenaire')->with('success', 'partenaire modifié avec succès');
}

public function deletepartenaire($IDPartenaire)
{
    $partenaire = Partenaire::find($IDPartenaire);
    $partenaire->delete();
    return redirect('/liste-partenaire')->with('success', 'Partenaire supprimé avec succès');
}


}
