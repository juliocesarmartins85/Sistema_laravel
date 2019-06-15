<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnexosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anexos', function(Blueprint $table)
		{
			$table->integer('idAnexos', true);
			$table->string('anexo', 45)->nullable();
			$table->string('thumb', 45)->nullable();
			$table->string('url', 300)->nullable();
			$table->string('path', 300)->nullable();
			$table->integer('os_id')->index('fk_anexos_os1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anexos');
	}

}
