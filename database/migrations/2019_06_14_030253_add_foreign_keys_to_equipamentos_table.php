<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipamentos', function(Blueprint $table)
		{
			$table->foreign('clientes_id', 'fk_equipanentos_clientes1')->references('idClientes')->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('marcas_id', 'fk_equipanentos_marcas1')->references('idMarcas')->on('marcas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipamentos', function(Blueprint $table)
		{
			$table->dropForeign('fk_equipanentos_clientes1');
			$table->dropForeign('fk_equipanentos_marcas1');
		});
	}

}
