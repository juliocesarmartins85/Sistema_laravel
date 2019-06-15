<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnexosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('anexos', function(Blueprint $table)
		{
			$table->foreign('os_id', 'fk_anexos_os1')->references('idOs')->on('os')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('anexos', function(Blueprint $table)
		{
			$table->dropForeign('fk_anexos_os1');
		});
	}

}
