<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User:: truncate();


        $faker = \Faker\Factory::create();

        for ($i=0; $i <30; $i++) {
            \App\User::create([
                'name'=>$faker->sentence,
                'email'=> $faker->email,
                'password'=> Hash::make('senha')
            ]);
        }

        \App\User::create([
            'name'=>$faker->sentence,
            'email'=> $faker->email,
            'password'=> Hash::make('senha')
        ]);
    }
}
