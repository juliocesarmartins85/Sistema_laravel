<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipamentosOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipamentos_os', function(Blueprint $table)
		{
			$table->foreign('equipamentos_id', 'fk_equipamentos_os_equipanentos1')->references('idEquipamentos')->on('equipamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('os_id', 'fk_equipamentos_os_os1')->references('idOs')->on('os')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipamentos_os', function(Blueprint $table)
		{
			$table->dropForeign('fk_equipamentos_os_equipanentos1');
			$table->dropForeign('fk_equipamentos_os_os1');
		});
	}

}
