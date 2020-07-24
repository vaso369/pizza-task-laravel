<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredients')->insert([
            [
                'name' => 'Cheese',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Tomato sauce',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Basil',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Pepperoni',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Bacon',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Beef',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Ham',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Mushrooms',
                'is_active' => 1,
                'created_at'=>Carbon::now()
            ]
        ]);
    }
}
