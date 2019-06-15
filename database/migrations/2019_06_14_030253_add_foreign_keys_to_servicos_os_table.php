<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToServicosOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('servicos_os', function(Blueprint $table)
		{
			$table->foreign('os_id', 'fk_servicos_os_os1')->references('idOs')->on('os')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('servicos_id', 'fk_servicos_os_servicos1')->references('idServicos')->on('servicos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('servicos_os', function(Blueprint $table)
		{
			$table->dropForeign('fk_servicos_os_os1');
			$table->dropForeign('fk_servicos_os_servicos1');
		});
	}

}
