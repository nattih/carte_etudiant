<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Filiere;
use Faker\Generator as Faker;

$factory->define(Filiere::class, function (Faker $faker) {
   
    $nom_fil = $faker->word();
 
    return[
        //
        'nom_fil'=>$nom_fil,
        
       
    ];
});
