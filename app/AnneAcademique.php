<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnneAcademique extends Model
{
    protected $guarded=[];
    public function cartes(){
        return $this->belongsTo('App\Carte');
    }
}
