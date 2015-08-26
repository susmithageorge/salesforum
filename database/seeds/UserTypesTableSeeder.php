<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->truncate();
        DB::table('user_types')->insert(['name' => 'admin']);
        DB::table('user_types')->insert(['name' => 'user']);
    }
}
