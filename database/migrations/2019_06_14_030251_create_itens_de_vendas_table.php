<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItensDeVendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('itens_de_vendas', function(Blueprint $table)
		{
			$table->integer('idItens', true);
			$table->string('subTotal', 45)->nullable();
			$table->integer('quantidade')->nullable();
			$table->integer('vendas_id')->index('fk_itens_de_vendas_vendas1');
			$table->integer('produtos_id')->index('fk_itens_de_vendas_produtos1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('itens_de_vendas');
	}

}
