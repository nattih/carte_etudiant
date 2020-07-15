<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthentificationController extends Controller
{
    //
    public function __construct()
    {
    $this->middleware('auth')->only(['accueil']);
  
    }
    public function index(){
        return view('Authentification');

    }


    public function index1(Request $request)
    {
        return view('Appgestion');
    }
    public function accueil(Request $request)
    {
        return view('Appgestion');
    }
}
