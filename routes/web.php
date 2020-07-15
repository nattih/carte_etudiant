<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('accueil', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/1', 'HomeController@index')->name('home');


/////////////////////////////////////////////////////////////

// Route pour authentification et accueil

// Réservé aux utilisateurs authentifiés

Route::get('/','AuthentificationController@index') ;


Route::post('/','AuthentificationController@index1')->name('connection') ;
    
Route::get('accueil','AuthentificationController@accueil')->name('accueil') ;

Route::get('ajouter','NouveauController@index')->name('ajouter');

Route::get('lister','ListeController@index')->name('lister');
Route::get('reimprimer','ReimprimerController@index')->name('reimprimer');

 

// Route::get('{n}',function($n){ return view($n); })

