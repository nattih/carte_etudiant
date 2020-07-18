<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cycle;

class CycleController extends Controller
{
    public function new(){
        $cycle= Cycle::get();
        return view('espace.form', compact('cycle'));
    }

    public function store(Cycle $cycle){
            $data=request()->validate([
                'nom'=> ['required','string']
              ]);
            $cycle=Cycle::create([
                  'nom'=>$data[ 'nom']
              ]);
              return redirect()->route('espace.nouveau');
        }
}
