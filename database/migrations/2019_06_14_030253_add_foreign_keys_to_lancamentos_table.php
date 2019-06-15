<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLancamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lancamentos', function(Blueprint $table)
		{
			$table->foreign('categorias_id', 'fk_lancamentos_categorias1')->references('idCategorias')->on('categorias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('clientes_id', 'fk_lancamentos_clientes1')->references('idClientes')->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('contas_id', 'fk_lancamentos_contas1')->references('idContas')->on('contas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lancamentos', function(Blueprint $table)
		{
			$table->dropForeign('fk_lancamentos_categorias1');
			$table->dropForeign('fk_lancamentos_clientes1');
			$table->dropForeign('fk_lancamentos_contas1');
		});
	}

}
