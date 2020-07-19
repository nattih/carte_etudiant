<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nationalite;

class NationaliteController extends Controller
{
    public function new(){
        $nation= Nationalite::get();
        return view('espace.form', compact('nation'));
    }

    public function store(Nationalite $nation){
            $data=request()->validate([
                'nom'=> ['required','string']
              ]);
            $nation=Nationalite::create([
                  'nom'=>$data[ 'nom']
              ]);
              return redirect()->route('espace.nouveau');
        }
}
