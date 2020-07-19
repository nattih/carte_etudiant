<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $guarded=[];
    public function cartes(){
        return $this->belongsTo('App\Carte');
    }
}
