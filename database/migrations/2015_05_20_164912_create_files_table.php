<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gda_files', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('filename');
            $table->string('type');
            $table->string('ficha');
            $table->string('incidente');
            $table->string('directory');
            $table->string('user_id');
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
        Schema::drop('gda_files');
	}

}
