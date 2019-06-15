<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGarantiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('garantias', function(Blueprint $table)
		{
			$table->foreign('usuarios_id', 'fk_garantias_usuarios1')->references('idUsuarios')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('garantias', function(Blueprint $table)
		{
			$table->dropForeign('fk_garantias_usuarios1');
		});
	}

}
