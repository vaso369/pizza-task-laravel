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
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Tomato sauce',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Basil',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Pepperoni',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Bacon',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Beef',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Ham',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Mushrooms',
                'created_at'=>Carbon::now()
            ]
        ]);
    }
}
