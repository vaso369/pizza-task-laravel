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
        foreach (range(1,8) as $index) {
            DB::table('ingredient_pizza')->insert([
                
                    'pizza_id'=>$index,
                    'ingredient_id'=>rand(1,3)
                
            ]);
        }
        foreach (range(1,8) as $index) {
            DB::table('ingredient_pizza')->insert([
                
                    'pizza_id'=>$index,
                    'ingredient_id'=>rand(4,6)
                
            ]);
        }
        foreach (range(1,8) as $index) {
            DB::table('ingredient_pizza')->insert([
                
                    'pizza_id'=>$index,
                    'ingredient_id'=>rand(7,8)
                
            ]);
        }
    }
}
