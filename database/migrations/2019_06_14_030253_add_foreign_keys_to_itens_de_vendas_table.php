<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToItensDeVendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('itens_de_vendas', function(Blueprint $table)
		{
			$table->foreign('produtos_id', 'fk_itens_de_vendas_produtos1')->references('idProdutos')->on('produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('vendas_id', 'fk_itens_de_vendas_vendas1')->references('idVendas')->on('vendas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('itens_de_vendas', function(Blueprint $table)
		{
			$table->dropForeign('fk_itens_de_vendas_produtos1');
			$table->dropForeign('fk_itens_de_vendas_vendas1');
		});
	}

}
