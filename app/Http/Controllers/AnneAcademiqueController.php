<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnneAcademique;

class AnneAcademiqueController extends Controller
{
    public function new(){
        $anne= AnneAcademique::get();
        return view('espace.form', compact('anne'));
    }

    public function store(AnneAcademique $anne){
            $data=request()->validate([
                'nom'=> ['required','string']
              ]);
            $anne=AnneAcademique::create([
                  'nom'=>$data[ 'nom']
              ]);
              return redirect()->route('espace.nouveau');
        }
}
