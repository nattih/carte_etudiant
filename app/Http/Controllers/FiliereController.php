<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filiere_u;
use App\Ufrs;

class FiliereController extends Controller
{
    public function new(){
        $ufrs=Ufrs::all();
        return view('espace.form',compact('ufrs'));

    }
    public function store(Filiere_u $filieres){
        $data=request()->validate([
            'nom'=> ['required','string'],
            'ufrs_id'=> ['required','integer']
          ]);
        $filieres=Filiere_u::create([
              'nom'=>$data[ 'nom'],
              'ufrs_id'=>$data[ 'ufrs_id']
          ]);
          return redirect()->route('espace.nouveau');
    }

    public function details( string $ufr , int $id){
        $ufrs=Ufrs::find($id);
        $filieres=$ufrs->filieres;
        return view('espace.filieres',compact('filieres'));
        }

    public function supprimer( int $id){
            $filiere=Filiere_u::find($id);
            $nom_ufr=$filiere->ufrs->nom;
            $id=$filiere->ufrs->id;
            $filiere->delete();
            return redirect()->route('espace.nouveau');
        }
}
