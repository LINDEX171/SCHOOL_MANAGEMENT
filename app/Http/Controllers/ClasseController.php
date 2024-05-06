<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    { 
      return view("admin.classes.classe");
    }

    public function liste()
    {
        $classe = Classe::all();
      return view("admin.classes.liste-classe", compact('classe'));
    }

    public function store(Request $request)
    {
        $classe = new Classe(); 
        $classe->Classe = $request->Classe;
        $classe->Libelle = $request->Libelle;
        $classe->Niveau = $request->Niveau;
       
        
        $classe->save();
 
      return redirect()->route('liste5')->with('success', 'classe ajouté avec succès');
}

public function updateclasse($id)
{
    $classe = Classe::find($id);
    return view("admin.classes.update", compact('classe'));
}


public function updatestoreclasse(Request $request)
{
    $classe = Classe::find($request->id);
    $classe->Classe = $request->Classe;
    $classe->Libelle = $request->Libelle;
    $classe->Niveau = $request->Niveau;
    $classe->update(); 
    return redirect('/liste-classe')->with('success', 'classe modifié avec succès');
}

public function deleteclasse($id)
{
    $classe = Classe::find($id);
    $classe->delete();
    return redirect('/liste-classe')->with('success', 'classe supprimé avec succès');
}
}
