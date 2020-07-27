<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Carte;
class ImpressionController extends Controller
{
    public function getFilePdf()
    // {
    // 	$carte=Carte::get();
    // 	$pdf = PDF::loadView('carte.details', $carte);
    // 	$pdf->save(storage_path().'_filename.pdf');
    // 	return $pdf->download('carte.details');
	// }
	

	public function generatePDF($id)
    {
		$carte = Carte::findOrFail($id);
    	$pdf = PDF::loadView('carte.details',compact('carte'));
		$name='carte-'.$carte->id. ".pdf";
		return $pdf->stream('name');
    	//  ;
	}
}
