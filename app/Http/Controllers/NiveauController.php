<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveau;

class NiveauController extends Controller
{
    public function new(){
        $nivo=Niveau::get();
        return view('espace.form', compact('nivo'));
    }

    public function store(Niveau $nivo){
            $data=request()->validate([
                'nom'=> ['required','string']
              ]);
            $nivo=Niveau::create([
                  'nom'=>$data[ 'nom']
              ]);
              return redirect()->route('espace.nouveau');
        }
}
