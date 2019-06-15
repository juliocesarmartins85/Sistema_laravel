<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->integer('idClientes', true);
			$table->string('nomeCliente');
			$table->string('sexo', 20)->nullable();
			$table->boolean('pessoa_fisica')->default(1);
			$table->string('documento', 20);
			$table->string('telefone', 20);
			$table->string('celular', 20)->nullable();
			$table->string('email', 100);
			$table->date('dataCadastro')->nullable();
			$table->string('rua', 70)->nullable();
			$table->string('numero', 15)->nullable();
			$table->string('bairro', 45)->nullable();
			$table->string('cidade', 45)->nullable();
			$table->string('estado', 20)->nullable();
			$table->string('cep', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clientes');
	}

}
