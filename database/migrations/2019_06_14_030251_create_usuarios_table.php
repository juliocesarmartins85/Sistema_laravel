<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('idUsuarios', true);
			$table->string('nome', 80);
			$table->string('rg', 20)->nullable();
			$table->string('cpf', 20);
			$table->string('rua', 70)->nullable();
			$table->string('numero', 15)->nullable();
			$table->string('bairro', 45)->nullable();
			$table->string('cidade', 45)->nullable();
			$table->string('estado', 20)->nullable();
			$table->string('email', 80);
			$table->string('senha', 200);
			$table->string('telefone', 20);
			$table->string('celular', 20)->nullable();
			$table->boolean('situacao');
			$table->date('dataCadastro');
			$table->integer('permissoes_id')->index('fk_usuarios_permissoes1_idx');
			$table->date('dataExpiracao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}
