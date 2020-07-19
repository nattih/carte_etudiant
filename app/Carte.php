<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $fillable=['id','matricule', 'nom', 'prenom','ufrs_id','filiere_us_id', 'cycles_id', 'niveaux_id',
                         'anne_academiques_id','nationalites_id', 'email', 'tuteur', 'photo'];
    // protected $guarded=[];
    public function ufrs(){
        return $this->hasOne('App\Ufrs');
    }
    public function filieres(){
        return $this->hasMany('App\Filiere_u');
    }
    public function cycles(){
        return $this->hasMany('App\Cycle');
    }
    public function niveaux(){
        return $this->hasMany('App\Niveau');
    }
    public function annes(){
        return $this->hasMany('App\AnneAcademique');
    }
    public function nation(){
        return $this->hasMany('App\Nationalite');
    }
}
