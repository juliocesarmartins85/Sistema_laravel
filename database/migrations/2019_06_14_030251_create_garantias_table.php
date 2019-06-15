<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGarantiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('garantias', function(Blueprint $table)
		{
			$table->integer('idGarantias', true);
			$table->date('dataGarantia')->nullable();
			$table->string('refGarantia', 15)->nullable();
			$table->text('textoGarantia', 65535)->nullable();
			$table->integer('usuarios_id')->nullable()->index('fk_garantias_usuarios1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('garantias');
	}

}
