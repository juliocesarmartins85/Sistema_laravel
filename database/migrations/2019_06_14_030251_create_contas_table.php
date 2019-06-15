<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contas', function(Blueprint $table)
		{
			$table->integer('idContas', true);
			$table->string('conta', 45)->nullable();
			$table->string('banco', 45)->nullable();
			$table->string('numero', 45)->nullable();
			$table->decimal('saldo', 10)->nullable();
			$table->date('cadastro')->nullable();
			$table->boolean('status')->nullable();
			$table->string('tipo', 80)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contas');
	}

}
