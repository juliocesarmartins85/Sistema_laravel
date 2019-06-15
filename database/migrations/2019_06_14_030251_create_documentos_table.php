<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documentos', function(Blueprint $table)
		{
			$table->integer('idDocumentos', true);
			$table->string('documento', 70)->nullable();
			$table->text('descricao', 65535)->nullable();
			$table->string('file', 100)->nullable();
			$table->string('path', 300)->nullable();
			$table->string('url', 300)->nullable();
			$table->date('cadastro')->nullable();
			$table->string('categoria', 80)->nullable();
			$table->string('tipo', 15)->nullable();
			$table->string('tamanho', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documentos');
	}

}
