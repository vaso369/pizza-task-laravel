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
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            PizzaSeeder::class,
            PizzaIngredientSeeder::class,
            IngredientSeeder::class,
            PizzaSizeSeeder::class,
            SizeSeeder::class,
        ]);
       
    }
}
