<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'admin'
            ],
            [
                'role_name' => 'user'
            ]
        ]);
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
