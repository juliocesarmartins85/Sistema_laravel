<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('os', function(Blueprint $table)
		{
			$table->integer('idOs', true);
			$table->date('dataInicial')->nullable();
			$table->date('dataFinal')->nullable();
			$table->string('garantia', 45)->nullable();
			$table->text('descricaoProduto', 65535)->nullable();
			$table->text('defeito', 65535)->nullable();
			$table->string('status', 45)->nullable();
			$table->text('observacoes', 65535)->nullable();
			$table->text('laudoTecnico', 65535)->nullable();
			$table->string('valorTotal', 15)->nullable();
			$table->integer('clientes_id')->index('fk_os_clientes1');
			$table->integer('usuarios_id')->index('fk_os_usuarios1');
			$table->integer('lancamento')->nullable()->index('fk_os_lancamentos1');
			$table->boolean('faturado');
			$table->integer('garantias_id')->nullable()->index('fk_os_garantias1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('os');
	}

}
