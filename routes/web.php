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


Route::get('master', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');



            /*************F____[0 T 0]_____K******************* 
             *                                              *
             *   Route pour authentification et accueil     *                                *
             *******************F_T_K*************************/


Route::get('/','AuthentificationController@index') ;


Route::post('/','AuthentificationController@index1')->name('connection') ;
    
Route::get('accueil','AuthentificationController@accueil')->name('accueil') ;

// Route::get('ajouter','NouveauController@index')->name('ajouter');

// Route::get('lister','ListeController@index')->name('lister');
Route::get('reimprimer','ReimprimerController@index')->name('reimprimer');

  
             /*************____[0 T 0]_____******************* 
             *                                              *
             *route pour les controller ufr et filliere et autre                                     *
            *******************Nath*************************/
           
 Route::get('/UNB/ufr/new', 'UfrController@new')->name('espace.nouveau');
 Route::post('/UNB/ufr/new', 'UfrController@store')->name('ufrs.store');
 Route::get('/ufr/supprimer/{id}', 'UfrController@supprimer')->name('ufrs.supprimer');
 
 Route::get('/UNB/ufr/new', 'FiliereController@new')->name('espace.nouveau');
 Route::post('/Filiere/new', 'FiliereController@store')->name('filiere.store');
 Route::get('/ufr/{ufr}/details/{id}', 'FiliereController@details')->name('ufr.details');
 Route::get('/filiere/supprimer/{id}', 'FiliereController@supprimer')->name('filiere.supprimer');
 
 Route::post('/UNB/Cycle/new', 'CycleController@store')->name('cycle.store');
 Route::post('/UNB/Annee/new', 'AnneAcademiqueController@store')->name('anne.store');
 Route::post('/UNB/Nationalite/new', 'NationaliteController@store')->name('nation.store');
 Route::post('/UNB/Tuteur/new', 'TuteurController@store')->name('tuteur.store');
 Route::post('/UNB/Niveau/new', 'NiveauController@store')->name('niveau.store');         

 //route carte

Route::get('/UNB/Carte/new', 'CarteController@new')->name('carte.nouveau');
Route::post('/Carte/new', 'CarteController@store')->name('carte.store');
Route::get('/Carte/liste', 'CarteController@list')->name('carte.list');
Route::get('/Carte/supprimer/{id}', 'CarteController@supprimer')->name('carte.supprimer');
Route::get('/Carte/{carte}/details/{id}', 'CarteController@details')->name('carte.details');
Route::get('/Carte/{carte}/details/{id}', 'CarteController@details')->name('carte.details');

//route impression
// Route::get('/Carte/Impression', 'ImpressionController@getFilePdf')->name('carte.imprime');
Route::get('/carte/pdf','CarteController@createPDF');

             /*************____[0 T 0]_____******************* 
             *                                              *
             *         route pour  envoyer mail                                     *
            *******************F_T_K*************************/
           
Route::get('mail','MailController@sendMailView' )->name('mail')  ;

Route::post('send_mail','MailController@sendMail')->name('sendMail');

