<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ufrs;

class UfrController extends Controller
{
    
    

    public function new(){
        // $ufrs=Ufrs::paginate(3);
        $ufrs= Ufrs::get();
        return view('espace.form', compact('ufrs'));
    }

    public function store(Ufrs $ufr){
            $data=request()->validate([
                'nom'=> ['required','string']
              ]);
            $ufr=Ufrs::create([
                  'nom'=>$data[ 'nom']
              ]);
              return redirect()->route('espace.nouveau');
        }
        public function details(){
            $ufrs=Ufrs::find($id);
            $filieres=$ufrs->filiere;
            
                          return view('espace.filiere',compact('ufrs', 'filiere'));
                        }
 public function supprimer(int $id){
        $ufr=Ufrs::find($id);
        $id=$ufr->id;
        $ufr->delete();
        return redirect()->route('espace.nouveau',['id'=>$id]);
    }
}
