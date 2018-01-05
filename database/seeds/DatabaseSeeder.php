<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
    	$faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('eleves')->insert([
	            'nom' => $faker->lastName,
	            'prenom' => $faker->firstName,
	        ]);
        }
    }
}
