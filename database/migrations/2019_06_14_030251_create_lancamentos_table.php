<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLancamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lancamentos', function(Blueprint $table)
		{
			$table->integer('idLancamentos', true);
			$table->string('descricao')->nullable();
			$table->string('valor', 15);
			$table->date('data_vencimento');
			$table->date('data_pagamento')->nullable();
			$table->boolean('baixado')->nullable()->default(0);
			$table->string('cliente_fornecedor')->nullable();
			$table->string('forma_pgto', 100)->nullable();
			$table->string('tipo', 45)->nullable();
			$table->string('anexo', 250)->nullable();
			$table->integer('clientes_id')->nullable()->index('fk_lancamentos_clientes1');
			$table->integer('categorias_id')->nullable()->index('fk_lancamentos_categorias1_idx');
			$table->integer('contas_id')->nullable()->index('fk_lancamentos_contas1_idx');
			$table->integer('vendas_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lancamentos');
	}

}
