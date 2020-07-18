<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $fillable=['id','matricule', 'nom', 'prenom','ufrs_id','filiere_us_id', 'cycles_id', 'niveaux_id',
                         'anne_academiques_id','nationalites_id', 'email', 'tuteur', 'photo'];

    public function ufrs(){
        return $this->belongsTo('App\Ufrs');
    }
    public function filiere_us(){
        return $this->belongsTo('App\Filiere_u');
    }
    public function cycles(){
        return $this->belongsTo('App\Cycle');
    }
    public function niveaux(){
        return $this->belongsTo('App\Niveau');
    }
    public function anne_academiques(){
        return $this->belongsTo('App\AnneAcademique');
    }
    public function nationalites(){
        return $this->belongsTo('App\Nationalite');
    }
}
