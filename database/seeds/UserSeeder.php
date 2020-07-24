<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Carbon;



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
	        User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
	            'email' => $faker->email,
                'password' => bcrypt('secret'),
                'role_id' => 2,
                'created_at'=>Carbon::now()

            ]);
            }
    }
}
