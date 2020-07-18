<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ufr;
use Faker\Generator as Faker;

$factory->define(Ufr::class, function (Faker $faker) {
    $nom_ufr = $faker->word();
 
    return
    [
        //
        'nom_ufr'=>$nom_ufr,
        'slug' => Str::slug($nom_ufr),
    ];
});
