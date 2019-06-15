<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('os', function(Blueprint $table)
		{
			$table->foreign('clientes_id', 'fk_os_clientes1')->references('idClientes')->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lancamento', 'fk_os_lancamentos1')->references('idLancamentos')->on('lancamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuarios_id', 'fk_os_usuarios1')->references('idUsuarios')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('os', function(Blueprint $table)
		{
			$table->dropForeign('fk_os_clientes1');
			$table->dropForeign('fk_os_lancamentos1');
			$table->dropForeign('fk_os_usuarios1');
		});
	}

}
