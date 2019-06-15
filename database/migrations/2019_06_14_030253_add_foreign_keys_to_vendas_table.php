<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vendas', function(Blueprint $table)
		{
			$table->foreign('clientes_id', 'fk_vendas_clientes1')->references('idClientes')->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lancamentos_id', 'fk_vendas_lancamentos1')->references('idLancamentos')->on('lancamentos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuarios_id', 'fk_vendas_usuarios1')->references('idUsuarios')->on('usuarios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vendas', function(Blueprint $table)
		{
			$table->dropForeign('fk_vendas_clientes1');
			$table->dropForeign('fk_vendas_lancamentos1');
			$table->dropForeign('fk_vendas_usuarios1');
		});
	}

}
