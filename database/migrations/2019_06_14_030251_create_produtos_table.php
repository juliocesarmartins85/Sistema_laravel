<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table)
		{
			$table->integer('idProdutos', true);
			$table->string('descricao', 80);
			$table->string('unidade', 10)->nullable();
			$table->decimal('precoCompra', 10)->nullable();
			$table->decimal('precoVenda', 10);
			$table->integer('estoque');
			$table->integer('estoqueMinimo')->nullable();
			$table->boolean('saida')->nullable();
			$table->boolean('entrada')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('produtos');
	}

}
