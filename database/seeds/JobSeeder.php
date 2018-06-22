<?php
/**
 * Created by PhpStorm.
 * User: analise
 * Date: 20/06/2018
 * Time: 14:54
 */

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{

    function run()
    {
        $faker = \Faker\Factory::create();
        \App\Job::create([
            'title' => 'vaga dba',
            'description' => 'bshdfkjahsdfgashdfhgsadhgfashgfhasgdfhgsjf',
            'local' => 'Salvador',
            'title' => 'vaga dba',
            'remote' => 'no',
            'type' => 3,
            'company_id' => 1,
        ]);
        for ($i = 0; $i < 10; $i++) {
            \App\Job::create([
                'title' => $faker->title,
                'description' => 'hgfhgsjfgjsfdghdfhgsjdkfgjsdf',
                'local' => 'Salvador',
                'title' => $faker->title,
                'remote' => 'no',
                'type' => 3,
                'company_id' => 1,
            ]);
        }
    }
}