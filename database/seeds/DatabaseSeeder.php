<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //   // $this->call(Users::class);
    //     factory(App\Ufr::class, 10)->create()->each(function ($ufr) {
    //         $i = rand(5, 8);
    //         while (--$i) {
    //             // $ufr->filieres()->save(factory(App\Filiere::class)->make());
    //         }
    //     });
        factory(App\User::class)->create();
    }
}
