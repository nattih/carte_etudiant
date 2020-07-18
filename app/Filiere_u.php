<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere_u extends Model
{
    protected $guarded=[];
    public function ufrs(){
        return $this->belongsTo('App\Ufrs');
    }
    public function cartes(){
        return $this->hasMany('App\Carte');
    }
}
