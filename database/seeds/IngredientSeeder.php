<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
                'is_active' => 1
            ],
            [
                'name' => 'Tomato sauce',
                'is_active' => 1
            ],
            [
                'name' => 'Basil',
                'is_active' => 1
            ],
            [
                'name' => 'Pepperoni',
                'is_active' => 1
            ],
            [
                'name' => 'Bacon',
                'is_active' => 1
            ],
            [
                'name' => 'Beef',
                'is_active' => 1
            ],
            [
                'name' => 'Ham',
                'is_active' => 1
            ],
            [
                'name' => 'Mushrooms',
                'is_active' => 1
            ]
        ]);
    }
}
