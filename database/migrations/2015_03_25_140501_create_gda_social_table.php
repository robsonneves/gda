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
            $table->bigInteger('id')->primary();
            $table->string('nome'); //verficar ->unique();
            $table->string('email');
            $table->string('link');
            $table->string('avatar');
            $table->string('locale');
            $table->string('provider');
            $table->string('user_id');
            $table->boolean('active')->default(1);
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
