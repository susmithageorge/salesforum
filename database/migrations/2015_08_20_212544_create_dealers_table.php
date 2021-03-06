<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers',function(Blueprint $table)
        {
        
        $table->increments('id');
        $table->integer('user_id');
        $table->string('name')->unique();
        $table->string('uploadfilename');
        $table->string('info');
        $table->timestamps();
        $table->softDeletes();


       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dealers');
    }
}
