<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    protected $guarded=[];
    public function cartes(){
        return $this->belongsTo('App\Carte');
    }
}
