<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGdaRegisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('gda_register', function(Blueprint $table)
        {
            $table->increments('id'); //bigIncrements,
            $table->string('cpfcnpj')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->boolean('news');
            $table->boolean('terms');
            $table->char('status')->default('P');  //P pendente, E email=enviado C-usuario criado
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
        Schema::drop('gda_register');
	}

}
