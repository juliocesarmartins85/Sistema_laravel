<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmitenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emitente', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome')->nullable();
			$table->string('cnpj', 45)->nullable();
			$table->string('ie', 50)->nullable();
			$table->string('rua', 70)->nullable();
			$table->string('numero', 15)->nullable();
			$table->string('bairro', 45)->nullable();
			$table->string('cidade', 45)->nullable();
			$table->string('uf', 20)->nullable();
			$table->string('telefone', 20)->nullable();
			$table->string('email')->nullable();
			$table->string('url_logo', 225)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('emitente');
	}

}
