<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker= \Faker\Factory::create();
      for($i=0;$i<50;$i++){
      DB::table('clients')->insert([
        'nom'=>$faker->lastName,
        'prenom'=>$faker->firstName,
        'dateN'=>$faker->date,
        'adresse'=>$faker->address,
        'tel'=>$faker->randomNumber(8),
      ]);
  }
    }
}
