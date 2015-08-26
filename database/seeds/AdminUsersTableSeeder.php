<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class AdminUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$a=Hash::make('anu');
        DB::table('admin_users')->insert(['id' => 1, 'name'=>'anu','email' => 'susmitha@ibexweb.com', 'password'=>$a,'bio'=>'kothamangalam']);
    }
}
