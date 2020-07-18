<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Carte;
class ImpressionController extends Controller
{
    public function getFilePdf()
    {
    	$carte=Carte::all();
    	$pdf = PDF::loadView('carte.details',$carte);
    	$pdf->save(storage_path().'_filename.pdf');
    	return $pdf->download('carte.details.pdf');
    }
}
