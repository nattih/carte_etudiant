<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([

           return[
    
               
                'id' => '2',
                'name' => 'MANDSON',
                'email' => 'admin2@admin.com',
                'password' =>Hash::make('password'),
    
            ],
        ]);
    }
}
