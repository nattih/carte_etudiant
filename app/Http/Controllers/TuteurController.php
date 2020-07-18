<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuteur;

class TuteurController extends Controller
{
    public function new(){
        $tuteur= Tuteur::get();
        return view('espace.form', compact('nation'));
    }

    public function store(Tuteur $tuteur){
            $data=request()->validate([
                'nom'=> ['required','string']
              ]);
            $tuteur=Tuteur::create([
                  'nom'=>$data[ 'nom']
              ]);
              return redirect()->route('espace.nouveau');
        }
}
