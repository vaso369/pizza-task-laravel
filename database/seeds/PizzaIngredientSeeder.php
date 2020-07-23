<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PizzaIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,40) as $index) {
            DB::table('pizzas_ingredients')->insert([
                
                    'pizza_id'=>rand(1,8),
                    'ingredient_id'=>rand(1,8)
                
            ]);
        }
    }
}
