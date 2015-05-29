<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdaSocialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('gda_social', function(Blueprint $table)
        {
            $table->string('id')->primary(); //bigIncrements,
            $table->string('name');         //verficar ->unique();
            $table->string('email')->nullable();
            $table->string('link');
            $table->string('avatar')->nullable();
            $table->string('provider');
            $table->string('user_id');
            $table->boolean('active')->default(0);
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('gda_social');
	}

}
