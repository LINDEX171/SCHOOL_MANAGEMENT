<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    public function index()
    { 
      return view("admin.niveaux.niveau");
    
    }

    public function liste()
    {
        $niveau = Niveau::all();
      return view("admin.niveaux.liste-niveau", compact('niveau'));
    }

    public function store(Request $request)
    {
        $niveau = new Niveau(); 
        $niveau->Niveau = $request->Niveau;
        $niveau->Cycle = $request->Cycle;
        
        $niveau->save();
 
      return redirect()->route('liste2')->with('success', 'Niveau ajouté avec succès');
}

public function updateniveau($id)
{
    $niveau = Niveau::find($id);
    return view("admin.niveaux.update", compact('niveau'));
}


public function updatestoreniveau(Request $request)
{
    $niveau = Niveau::find($request->id);
    $niveau->Niveau = $request->Niveau;
    $niveau->Cycle = $request->Cycle;
    $niveau->update(); 
    return redirect('/liste-niveau')->with('success', 'Niveau modifié avec succès');
}



}
