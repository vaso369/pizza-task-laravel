<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'size'=>'32cm',
                'is_active'=>1
            ],
            [
                'size'=>'40cm',
                'is_active'=>1
            ],
            [
                'size'=>'50cm',
                'is_active'=>1
            ]
        ]);
    }
}
