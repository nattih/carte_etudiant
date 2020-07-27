<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Carte;
use App\Ufrs;
use App\Filiere_u;
use App\Cycle;
use App\Niveau;
use App\AnneAcademique;
use App\Nationalite;
use PDF;
class CarteController extends Controller
{
    public function list(Carte $cartes){
        $cartes=Carte::get();
        return view('carte.list', compact('cartes'));
    }
     
    public function new(){
        $cart=Carte::get();
        $ufrs=Ufrs::all();
        $filieres=Filiere_u::all();
        $cycles=Cycle::all();
        $nivos=Niveau::all();
        $annes=AnneAcademique::all();
        $nations=Nationalite::all();
        return view('carte.form', compact('filieres', 'ufrs', 'cycles', 'nivos', 'annes', 'nations'));
    }

    public function store(Request $request){

        //  $path=$request->photo;
        $imagePath=request('photo')->store('uploads','public');
         carte::create([
                        'matricule'=>$request->matricule,
                        'nom'=>$request->nom,
                        'prenom'=>$request->prenom,
                        'ufrs_id'=>$request->ufrs_id,
                        'filiere_us_id'=>$request->filiere_us_id,
                        'cycles_id'=>$request->cycles_id,
                        'niveaux_id'=>$request->niveaux_id,
                        'anne_academiques_id'=>$request->anne_academiques_id,
                        'nationalites_id'=>$request->nationalites_id,
                        'email'=>$request->email,
                        'tuteur'=>$request->tuteur,
                        'photo'=>$imagePath
                    ]);             
              return redirect()->route('carte.list');   
            
    }
    public function supprimer(int $id){
        $cartes=Carte::find($id);
        $id=$cartes->id;
        $cartes->delete();
        return redirect()->route('carte.list',['id'=>$id]);
    }
    public function details(string $carte, int $id){
        $carte=Carte::find($id);
        return view('carte.details',compact('carte' ));
        }

    //     //generate pdf
    // public function createPDF(){
    //     $carte=Carte::all();
    //     view()->share('carte', $carte);
    //     $pdf=PDF::loadView('carte.details', $carte);
    //     return $pdf->download('pdf_file.pdf');
    //     }

        public function pdf($id)
    {
		$carte = Carte::findOrFail($id);
    	$pdf = PDF::loadView('carte.details',compact('carte'));
		$name='carte-'.$carte->id. ".pdf";
		return $pdf->stream('name');
	}
        // public function createPDF() {
        //     // retreive all records from db
        //     $data = Employee::all();
      
        //     // share data to view
        //     view()->share('employee',$data);
        //     $pdf = PDF::loadView('pdf_view', $data);
      
        //     // download PDF file with download method
        //     return $pdf->download('pdf_file.pdf');
        
}
