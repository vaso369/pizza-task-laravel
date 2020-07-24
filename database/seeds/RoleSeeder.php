<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;




class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'admin',
                'created_at'=>Carbon::now()
            ],
            [
                'role_name' => 'user',
                'created_at'=>Carbon::now()
            ]
        ]);
    }
}
