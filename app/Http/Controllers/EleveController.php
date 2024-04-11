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
       // $eleve = Eleve::all();
      return view("admin.eleves.liste-eleve");
    }


    
}
