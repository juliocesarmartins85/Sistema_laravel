<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendas', function(Blueprint $table)
		{
			$table->integer('idVendas', true);
			$table->date('dataVenda')->nullable();
			$table->string('valorTotal', 45)->nullable();
			$table->string('desconto', 45)->nullable();
			$table->boolean('faturado')->nullable();
			$table->integer('clientes_id')->index('fk_vendas_clientes1');
			$table->integer('usuarios_id')->nullable()->index('fk_vendas_usuarios1');
			$table->integer('lancamentos_id')->nullable()->index('fk_vendas_lancamentos1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vendas');
	}

}
