<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ufrs extends Model
{
    protected $guarded=[];
    public function filieres(){
        return $this->hasMany('App\Filiere_u');
    }
    public function cartes(){
        return $this->hasMany('App\Carte');
    }
}
