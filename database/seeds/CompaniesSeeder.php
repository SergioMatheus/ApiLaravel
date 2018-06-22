<?php
/**
 * Created by PhpStorm.
 * User: analise
 * Date: 20/06/2018
 * Time: 14:45
 */

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{

    function run()
    {

        $faker = \Faker\Factory::create();
        \App\Company::create([
            'name' => 'Sergio',
            'email' => 'aleatorio@yopmail.com',
            'password'=>bcrypt('123456'),
            'website'=>'www.google.com',
            'logo'=>'nada',
        ]);
        for ($i=0;$i<10;$i++){
            \App\Company::create([
                'name' => $faker->name,
                'email' =>$faker->email,
                'password' => bcrypt('123456'),
                'website'=> 'www.google.com',
                'logo'=>'nada',
            ]);
        }
    }
}