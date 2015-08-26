<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->truncate();
       DB::table('users')->insert(['user_type_id' => 1, 'name'=>'admin','email' => 'susmitha@ibexweb.com', 'password'=>'$2y$10$.Mijh5./4qt/rge0rRfEdOVuMElWUCk47ppPvnKo8/woPhuZfWdiq']);
    }
}
