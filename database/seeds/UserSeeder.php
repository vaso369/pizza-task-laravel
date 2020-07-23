<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('users')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
	            'email' => $faker->email,
                'password' => bcrypt('secret'),
                'is_active' => 1,
                'role_id' => 2

            ]);
            }
    }
}
