<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PizzaSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,8) as $index) {
            DB::table('pizzas_sizes')->insert([
                
                    'pizza_id'=>$index,
                    'size_id'=>1,
                    'price'=>rand(5,15)
                
            ]);
        }
        foreach (range(1,8) as $index) {
            DB::table('pizzas_sizes')->insert([
                
                    'pizza_id'=>$index,
                    'size_id'=>2,
                    'price'=>rand(5,15)
                
            ]);
        }
        foreach (range(1,8) as $index) {
            DB::table('pizzas_sizes')->insert([
                
                    'pizza_id'=>$index,
                    'size_id'=>3,
                    'price'=>rand(5,15)
                
            ]);
        }
    }
}
