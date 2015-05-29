<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gda_users', function(Blueprint $table)
		{
			$table->string('id');
            $table->string('email'); //verficar ->unique();
			$table->integer('ramal');
            $table->integer('ddr');
			$table->float('pontos');
            $table->string('logo');
            $table->char('status');
            $table->string('tipo');
          	$table->rememberToken();
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
		Schema::drop('gda_users');
	}

}
